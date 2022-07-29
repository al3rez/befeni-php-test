<?php
namespace Befeni\Repositories;
use Befeni\Entities\ShirtOrder;

class ShirtOrderRepository implements IRepository {
    protected $db;

    public function __construct(IDatabase $db) {
        $this->db = $db;
    }

    public function find(ShirtOrder $shirtOrder)
    {
        $this->db->find($shirtOrder);
    }

    public function save(ShirtOrder $shirtOrder)
    {
        $this->db->save($shirtOrder);
    }

    public function remove(ShirtOrder $shirtOrder)
    {
        $this->db->remove($shirtOrder);
    }
}