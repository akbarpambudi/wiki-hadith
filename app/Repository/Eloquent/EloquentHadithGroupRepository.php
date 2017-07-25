<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 11:55 PM
 */

namespace App\Repository\Eloquent;


use App\Beans\HadithGroupBean;
use App\Entity\HadithGroup;
use App\Repository\HadithGroupRepository;
use Illuminate\Support\Facades\Log;

class EloquentHadithGroupRepository extends EloquentCrudRepository implements HadithGroupRepository
{

    protected $modelClz = 'App\Entity\HadithGroup';

    public function getAllGroupHierarchy()
    {
      $parentCursor=HadithGroup::whereNull('parent')->cursor();
      $results = $this->extractChildrenCursor($parentCursor);
      Log::debug($results);
      return $results;
    }

    private function extractChildrenCursor($cursor){
        $chResults = array();
        foreach($cursor as $item){
            Log::debug($item);
            $result = new HadithGroupBean();
            $result->id = $item->id;
            $result->groupName = $item->groupName;
            $result->children = $this->extractChildrenCursor(HadithGroup::where('parent',$result->id)->cursor());
            array_push($chResults,$result);
        }
        return $chResults;
    }
}