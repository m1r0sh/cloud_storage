<?php

namespace App\Service;

use Illuminate\Http\Request;

abstract class AbstractService
{
    abstract public function handle();
}