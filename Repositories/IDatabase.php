<?php
namespace Befeni\Repositories;
use Befeni\Entities\IEntity;

interface IDatabase {

    public function find(IEntity $entity);
    public function save(IEntity $entity);
    public function remove(IEntity $entity);

}