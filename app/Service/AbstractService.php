<?php

namespace App\Service;

abstract class AbstractService implements \HandleInterface
{
    private object $repository;

    abstract public function __construct();

    abstract public function handle();
}
