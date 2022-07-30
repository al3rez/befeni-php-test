<?php
namespace Befeni\Model;

class ShirtOrder implements BaseModel
{
    public $id = "1";
    public $customerId;
    public $fabricId;
    public $collarSize;
    public $chestSize;
    public $waistSize;
    public $wristSize;

    public function getTableName()
    {
        return "shirt_orders";
    }

    public function getId() {
        return $this->id;
    }

    public function setCustomerId($id) {
        return $this->customerId = $id;
    }

    public function setFabricId($id) {
        return $this->fabricId = $id;
    }
}
