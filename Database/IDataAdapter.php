<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

interface IDataAdapter
{

    public function find(BaseModel $model);
    public function save(BaseModel $model);
    public function remove(BaseModel $model);
}