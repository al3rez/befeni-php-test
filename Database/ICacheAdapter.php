<?php
namespace Befeni\Database;

use Befeni\Model\BaseModel;

interface ICacheAdapter
{

    public function remember(BaseModel $model, $func);
}
