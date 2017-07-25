<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 11:18 PM
 */

namespace App\Repository\Eloquent;


use App\Repository\CrudRepository;

abstract class EloquentCrudRepository implements CrudRepository
{

    protected $modelClz;

    public function create(array $model)
    {
        $_model = new $this->modelClz;
        foreach($model as $key=>$val){
            $_model->$key = $val;
        }
        $_model->save();
    }

    public function update($id,array $model)
    {
        $_model = $this->findById($id);
        foreach($model as $key=>$val){
            $_model->$key = $val;
        }
        $_model->save();
    }

    public function findAll()
    {
        return call_user_func([$this->modelClz,'all']);
    }

    public function findById($id)
    {
        return call_user_func([$this->modelClz,'find'],$id);
    }

    public function remove($id)
    {
        $_model = $this->findById($id);
        $this->delete();
    }
}