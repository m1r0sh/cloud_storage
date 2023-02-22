<?php

namespace App\Service\Users;

use App\Payload\SuccessPayload;
use Illuminate\Http\Request;

class UpdateService
{
    public function handle($id)
    {
        try {
            return new SuccessPayload('User updated');
        } catch (\ErrorException $e) {
            return $e->getMessage();
        }
    }
}
