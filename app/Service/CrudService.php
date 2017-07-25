<?php

/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/13/2017
 * Time: 9:23 AM
 */
namespace App\Service;

interface CrudService
{
    public function create(array $model);
    public function update($id,array $update);
    public function remove($id);
    public function findById($id);
    public function findAll();
}