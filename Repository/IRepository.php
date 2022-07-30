<?php
namespace Befeni\Repository;

use Befeni\Model\BaseModel;

interface IRepository
{
    public function find(BaseModel $model);

    public function save(BaseModel $model);

    public function remove(BaseModel $model);
}