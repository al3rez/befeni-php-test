<?php
namespace Befeni\Model;

class ShirtOrder implements BaseModel
{
    public $id;
    public $customerId;
    public $fabricId;
    public $collarSize;
    public $chestSize;
    public $waistSize;
    public $wristSize;
    public $createdAt;
    public $updatedAt;

    public function getTableName()
    {
        return "shirt_orders";
    }

    public function getValues() {
        return [
            $this->id,
            $this->customerId,
            $this->fabricId,
            $this->collarSize,
            $this->chestSize,
            $this->waistSize,
            $this->wristSize,
            date_create()->format('Y-m-d H:i:s'),
            date_create()->format('Y-m-d H:i:s'),
        ];
    }
}
