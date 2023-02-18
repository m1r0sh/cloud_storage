<?php

namespace App\Service\Files;

use App\Repository\Files\ListRepository as Repository;
use Illuminate\Http\Request;

class ListService
{
    protected object $repository;
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function handle()
    {

    }
}
