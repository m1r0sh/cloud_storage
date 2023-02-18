<?php

namespace App\Service\Admin;

use Illuminate\Http\Request;
use App\Repository\Admin\ReadRepository as Repository;

class ReadService
{
    protected object $repository;
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($id)
    {
    }
}
