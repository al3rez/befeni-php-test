<?php
namespace Befeni\Repository;

use Befeni\Database\IDataAdapter;
use Befeni\Database\ICacheAdapter;
use Befeni\Model\BaseModel;

class ShirtOrderRepository implements IRepository {
    protected $db;
    protected $cache;

    public function __construct(IDataAdapter $db, ICacheAdapter $cache) {
        $this->db = $db;
	$this->cache = $cache;
    }

    public function find(BaseModel $shirtOrder)
    {
	# NOTE: This can be replaced with any cache layer as long as you define
	# `remember` method, it is not prefect but it shows a felxiable way
	# of handling caching as once someone said `one doesnt not simply
	# implement caching :D`
	$result = $this->cache->remember($shirtOrder, function($shirtOrder) {
	        return $this->db->find($shirtOrder);
	});

	# NOTE: This parts is mainly for in-memory / any other data adapters
	# that return instances of BaseModel instead of an array.
	# 
	# NOTE: Another way of handling this would be a data mapper but for now this works great!
	if ($result instanceof BaseModel)
	{
		$shirtOrder = $result;
		return;
	}

        $shirtOrder->fabricId = $result['fabric_id'];
        $shirtOrder->customerId = $result['customer_id'];
        $shirtOrder->waistSize = $result['waist_size'];
        $shirtOrder->wristSize = $result['wrist_size'];
        $shirtOrder->collarSize = $result['collar_size'];
        $shirtOrder->chestSize = $result['chest_size'];
        $shirtOrder->updatedAt = $result['updated_at'];
        $shirtOrder->createdAt = $result['created_at'];
    }

    public function save(BaseModel $shirtOrder)
    {
        return $this->db->save($shirtOrder);
    }

    public function remove(BaseModel $shirtOrder)
    {
        return $this->db->remove($shirtOrder);
    }
}
