<?php

namespace Befeni\Database;

interface ISQLPDO
{
    public function run($sql, $args = NULL);
}