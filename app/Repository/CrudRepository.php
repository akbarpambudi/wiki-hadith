<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 11:05 PM
 */

namespace App\Repository;



interface CrudRepository
{
    /**
     * save an array into new database record
     *@param $model
     *
     */
    public function create(array $model);

    /**
     * update old record with new value
     * @param $id
     * @param $model
     *
     */
    public function update($id,array $model);
    /**
     * find specific record value by id
    * @param $id
     * @return object
     */
    public function findById($id);
    /**
     * get all record
     * @return list of object
     */
    public function findAll();
    /**
    * remove record by their id
     * @param $id
     */
    public function remove($id);
}