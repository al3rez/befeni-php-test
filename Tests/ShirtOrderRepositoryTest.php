<?php

include_once "./Database/IDataAdapter.php";
include_once "./Database/SQLDataAdapter.php";
include_once "./Database/InMemoryAdapter.php";
include_once "./Database/ICacheAdapter.php";
include_once "./Database/InMemoryCacheAdapter.php";
include_once "./Database/ISQLPDO.php";
include_once "./Database/MySQLPDO.php";
include_once "./Database/PostgresPDO.php";
include_once "./Model/BaseModel.php";
include_once "./Model/ShirtOrder.php";
include_once "./Repository/IRepository.php";
include_once "./Repository/ShirtOrderRepository.php";

use \Befeni\Database\MySQLPDO;
use \Befeni\Database\PostgresPDO;
use \Befeni\Database\SQLDataAdapter;
use \Befeni\Database\InMemoryAdapter;
use \Befeni\Database\InMemoryCacheAdapter;
use \Befeni\Model\ShirtOrder;
use \Befeni\Repository\ShirtOrderRepository;

use PHPUnit\Framework\TestCase;

final class ShirtOrderRepositoryTest extends TestCase
{
    public function testItSupportsMysql(): void
    {
	    $cache = new InMemoryCacheAdapter();
	    $pdo = new MySQLPDO("laravel", "root", "");
	    $mysql = new SQLDataAdapter($pdo);
	    $shirtOrder = new ShirtOrder();
	    $shirtOrder->id = 1;
	    $shirtOrderRepository = new ShirtOrderRepository($mysql, $cache);
	    $shirtOrderRepository->find($shirtOrder);
	    $this->assertNotNull($shirtOrder->customerId);
    }

    public function testItSupportsInMemory(): void
    {
	    $cache = new InMemoryCacheAdapter();
	    $mem = new InMemoryAdapter();
	    array_push($mem->db, new ShirtOrder());

	    $shirtOrder = $mem->db[0];
	    $shirtOrder->id = 1;
	    $shirtOrderRepository = new ShirtOrderRepository($mem, $cache);
	    $shirtOrderRepository->find($shirtOrder);
	    $this->assertNotNull($shirtOrder->id);
    }

    public function testItCaches(): void
    {
	    $cache = new InMemoryCacheAdapter();
	    $mem = new InMemoryAdapter();
	    array_push($mem->db, new ShirtOrder());

	    $shirtOrder = $mem->db[0];
	    $shirtOrder->id = 1;
	    $shirtOrderRepository = new ShirtOrderRepository($mem, $cache);
	    $shirtOrderRepository->find($shirtOrder);
	    $this->assertNotNull($shirtOrder->id);
    }
}
