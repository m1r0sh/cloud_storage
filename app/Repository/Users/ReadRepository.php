<?php

namespace App\Repository\Users;

use App\Models\User as Model;

class ReadRepository
{
    protected object $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function readRepository($id)
    {
        return $this->model
                    ->select('
                        *
                    ')
                    ->find($id);
    }
}
