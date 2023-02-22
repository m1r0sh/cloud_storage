<?php

namespace App\Repository\Users;

use App\Models\User as Model;

class ListRepository
{
    protected object $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function listRepository()
    {
        return $this->model
                    ->select(
                        '*'
                    )
                    ->get();
    }
}
