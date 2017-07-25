<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/13/2017
 * Time: 9:28 AM
 */

namespace App\Service\Impl;


use App\Repository\CrudRepository;
use App\Service\CrudService;
use App\Util\UserUtil;

abstract class BaseServiceImpl implements CrudService
{
    protected $repository;

    public function __construct(CrudRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $model)
    {
        $model['createdBy'] = UserUtil::getAuthenticateUser()->username;
        $this->repository->create($model);
    }

    public function update($id, array $model)
    {
        $model['updatedBy'] = UserUtil::getAuthenticateUser()->username;
        $this->repository->update($id,$model);
    }

    public function findAll()
    {
      return $this->repository->findAll();
    }

    public function findById($id)
    {
       return $this->repository->findById($id);
    }

    public function remove($id)
    {
        $this->repository->remove($id);
    }
}