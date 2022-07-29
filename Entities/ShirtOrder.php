<?php
namespace Befeni\Entities;
/**
 * A test Shirt Order model
 */
class ShirtOrder implements IEntity
{
    public function getTableName()
    {
        return 'shirt_orders';
    }

    public $id;
    public $customerId;
    public $fabricId;
    public $collarSize;
    public $chestSize;
    public $waistSize;
    public $wristSize;
}