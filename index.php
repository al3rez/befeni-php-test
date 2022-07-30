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

$pdo = new MySQLPDO("laravel", "root", "");
$shirtOrder = new ShirtOrder();
$shirtOrder->id = null;
$shirtOrder->customerId = 1;
$shirtOrder->fabricId = 1;
$shirtOrder->chestSize = 1;
$shirtOrder->waistSize = 1;
$shirtOrder->wristSize = 2;
$shirtOrder->collarSize = 1;
$shirtOrderRepository = new ShirtOrderRepository(new SQLDataAdapter($pdo));
$shirtOrderRepository->save($shirtOrder);
echo $shirtOrder->fabricId;
