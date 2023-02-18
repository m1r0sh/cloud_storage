<?php

namespace App\Service\Admin;

use Illuminate\Http\Request;
use App\Repository\Admin\ListRepository as Repository;

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
