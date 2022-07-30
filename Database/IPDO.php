<?php

namespace Befeni\Database;

interface IPDO
{
    public function run($sql, $args = NULL);
}