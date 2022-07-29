<?php
namespace Befeni;

use Befeni\Database\SQLDatabase;
use Befeni\Entities\ShirtOrder;
use Befeni\Repositories\ShirtOrderRepository;
use Befeni\Database\MySQLPDO;

$pdo = new MySQLPDO("laravel", "root", "");
$shirtOrder = new ShirtOrder();
$shirtOrderRepository = new ShirtOrderRepository(new SQLDatabase($pdo));
$shirtOrderRepository->find($shirtOrder);
echo $shirtOrder->fabricId;
