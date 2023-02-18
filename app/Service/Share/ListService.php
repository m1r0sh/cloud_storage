<?php

namespace App\Service\Share;

use App\Repository\Share\ListRepository as Repository;
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
