<?php

namespace App\Service\Files;

use App\Repository\Files\ReadRepository as Repository;
use Illuminate\Http\Request;

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
