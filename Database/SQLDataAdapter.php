<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

class SQLDataAdapter implements IDataAdapter
{

    public function __construct(ISQLPDO $db)
    {
        $this->db = $db;
    }

    public function find(BaseModel $model)
    {
        $query = "SELECT * FROM {$model->getTableName()} WHERE id = $model->id";
        return $this->db->run($query)->fetch();
    }

    public function save(BaseModel $model)
    {
        $values = rtrim(str_repeat('?,', count($model->getValues())), ',');
        $query = "INSERT INTO {$model->getTableName()} VALUES ($values)";
        return $this->db->run($query, $model->getValues());
    }

    public function remove(BaseModel $model)
    {

    }
}