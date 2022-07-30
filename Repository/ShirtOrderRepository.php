<?php
namespace Befeni\Repository;

use Befeni\Database\IDataAdapter;
use Befeni\Model\BaseModel;

class ShirtOrderRepository implements IRepository {
    protected $db;

    public function __construct(IDataAdapter $db) {
        $this->db = $db;
    }

    public function find(BaseModel $shirtOrder)
    {
        $result = $this->db->find($shirtOrder);
        $shirtOrder->setFabricId($result['fabric_id']);
        $shirtOrder->setCustomerId($result['customer_id']);
    }

    public function save(BaseModel $shirtOrder)
    {
        return $this->db->save($shirtOrder);
    }

    public function remove(BaseModel $shirtOrder)
    {
        return $this->db->remove($shirtOrder);
    }
}
