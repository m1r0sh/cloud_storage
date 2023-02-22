<?php

namespace App\Service\Users;

use App\Payload\SuccessPayload;
use Illuminate\Http\Request;

class AddService
{
    public function handle()
    {
        try {
            return new SuccessPayload('New user added');
        } catch (\ErrorException $e) {
            return $e->getMessage();
        }
    }
}
