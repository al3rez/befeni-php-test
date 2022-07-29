<?php
namespace Befeni\Database;

use Befeni\Entities\IEntity;

class SQLDatabase implements IDatabase
{

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function find(IEntity $entity)
    {
        return $this->db->run("SELECT * FROM {$entity->getTableName()} WHERE id = $entity->id")->fetch();
    }

    public function save(IEntity $entity)
    {

    }

    public function remove(IEntity $entity)
    {

    }
}

