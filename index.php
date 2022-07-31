<?php

include_once "./Database/IDataAdapter.php";
include_once "./Database/SQLDataAdapter.php";
include_once "./Database/ISQLPDO.php";
include_once "./Database/MySQLPDO.php";
include_once "./Model/BaseModel.php";
include_once "./Model/ShirtOrder.php";
include_once "./Repository/IRepository.php";
include_once "./Repository/ShirtOrderRepository.php";

use \Befeni\Database\MySQLPDO;
use \Befeni\Database\SQLDataAdapter;
use \Befeni\Model\ShirtOrder;
use \Befeni\Repository\ShirtOrderRepository;

use PHPUnit\Framework\TestCase;


$pdo = new MySQLPDO("laravel", "root", "");
$shirtOrder = new ShirtOrder();
$shirtOrder->id = 1;
$shirtOrderRepository = new ShirtOrderRepository(new SQLDataAdapter($pdo));
$shirtOrderRepository->find($shirtOrder);

final class ShirtOrderTest extends TestCase
{
    public function testItImplementsBaseModel(): void
    {
	    $this->assertInstanceOf('\Model\BaseModel', new ShirtOrder());
    }
}
