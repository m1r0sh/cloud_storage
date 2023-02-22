<?php

namespace App\Service\Users;

use App\Payload\SuccessPayload;
use Illuminate\Http\Request;

class DeleteService
{
    public function handle($id)
    {
        try {
            return new SuccessPayload('User deleted');
        } catch (\ErrorException $e) {
            return $e->getMessage();
        }
    }
}
