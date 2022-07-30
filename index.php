<?php

include_once "./Database/IDataAdapter.php";
include_once "./Database/SQLDataAdapter.php";
include_once "./Database/ISQLPDO.php";
include_once "./Database/MySQLPDO.php";
include_once "./Model/BaseModel.php";
include_once "./Model/ShirtOrder.php";
include_once "./Repository/IRepository.php";
include_once "./Repository/ShirtOrderRepository.php";

use \Befeni\Database\MyISQLPDO;
use \Befeni\Database\SQLDataAdapter;
use \Befeni\Model\ShirtOrder;
use \Befeni\Repository\ShirtOrderRepository;

$pdo = new MyISQLPDO("laravel", "root", "");
$shirtOrder = new ShirtOrder();
$shirtOrderRepository = new ShirtOrderRepository(new SQLDataAdapter($pdo));
$shirtOrderRepository->find($shirtOrder);
echo $shirtOrder->fabricId;
