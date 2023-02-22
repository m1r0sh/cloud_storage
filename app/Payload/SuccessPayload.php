<?php

namespace App\Payload;

class SuccessPayload extends Payload
{
    public function __construct(string $message = null, $data = null)
    {
        parent::__construct(array('message' => $message, "data" => $data), $this->status);
    }
}
