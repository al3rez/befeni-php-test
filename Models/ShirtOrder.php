<?php
namespace Befeni\Entities;

class ShirtOrder implements IEntity
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
      return $this.$id;
    }

    public function setCustomerId($id) {
      return $this->customerId = $id;
    }

    public function setFabricId($id) {
      return $this->fabricId = $id;
    }
}

