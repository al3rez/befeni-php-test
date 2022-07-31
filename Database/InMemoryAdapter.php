<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

class InMemoryAdapter implements IDataAdapter
{
    public $db;

    public function __construct()
    {
        $this->db = array();
    }

    public function find(BaseModel $model)
    {
	$found = null;
	if (($key = array_search($model, $this->db)) !== false)
	{
		$found = $this->db[$key];
	}

	return $found;
    }

    public function save(BaseModel $model)
    {
	    $this->db[] = $model;
    }

    public function remove(BaseModel $model)
    {
        $deleted = null;
        if (($key = array_search($model, $this->db)) !== false)
        {
            $deleted = $this->db[$key];
            unset($this->db[$key]);
        }

        return $deleted;
    }
}
