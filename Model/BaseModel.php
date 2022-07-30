<?php
namespace Befeni\Model;

interface BaseModel {
    public function getTableName();
    public function getValues();
}
