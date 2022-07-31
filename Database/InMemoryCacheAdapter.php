<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

class InMemoryCacheAdapter implements ICacheAdapter
{

    public function __construct()
    {
        $this->db = array();
    }

    public function remember(BaseModel $model, $func)
    {
	$found = null;

	if (($key = array_search($model, $this->db)) !== false)
	{
		$found = $this->db[$key];
	} else
	{
		$rememberThis = $func($model);
		$this->db[] = $rememberThis;
		$found = $rememberThis;
	}

	return $found;
    }
}
