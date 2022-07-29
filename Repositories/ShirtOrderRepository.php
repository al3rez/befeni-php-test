<?php

namespace Befeni\Repositories;

use Befeni\Database\IDatabase;
use Befeni\Entities\IEntity;

class ShirtOrderRepository implements IRepository {
    protected $db;

    public function __construct(IDatabase $db) {
        $this->db = $db;
    }

    public function find(IEntity $entity)
    {
        $result = $this->db->find($entity);
        $entity->setFabricId($result['fabric_id']);
        $entity->setCustomerId($result['customer_id']);
    }

    public function save(IEntity $entity)
    {
        return $this->db->save($entity);
    }

    public function remove(IEntity $entity)
    {
        return $this->db->remove($entity);
    }
}
