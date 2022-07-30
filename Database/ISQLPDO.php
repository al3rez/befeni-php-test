<?php

namespace Befeni\Database;

interface SQLPDO
{
    public function run($sql, $args = NULL);
}