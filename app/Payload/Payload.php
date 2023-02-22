<?php

namespace App\Payload;

abstract class Payload
{
    protected array|null $data = null;
    protected int $status = 200;

    public function __construct(array|null $data=null, int|null $status=null)
    {
        if (isset($data)){
            $this->data = $data;
        }
        if (isset($status)){
            $this->status = $status;
        }
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
}
