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
        $shirtOrder->fabricId = $result['fabric_id'];
        $shirtOrder->customerId = $result['customer_id'];
        $shirtOrder->waistSize = $result['waist_size'];
        $shirtOrder->wristSize = $result['wrist_size'];
        $shirtOrder->collarSize = $result['collar_size'];
        $shirtOrder->chestSize = $result['chest_size'];
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
