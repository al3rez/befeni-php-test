<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

class SQLDataAdapter implements IDataAdapter
{

    public function __construct(IPDO $db)
    {
        $this->db = $db;
    }

    public function find(BaseModel $model)
    {
        return $this->db->run("SELECT * FROM {$model->getTableName()} WHERE id = $model->id")->fetch();
    }

    public function save(BaseModel $model)
    {

    }

    public function remove(BaseModel $model)
    {

    }
}