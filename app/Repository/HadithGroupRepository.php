<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 11:47 PM
 */

namespace App\Repository;


interface HadithGroupRepository extends CrudRepository
{

    public function getAllGroupHierarchy();
}