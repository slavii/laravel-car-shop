<?php

namespace App\Repositories;

use App\Models\Body;

class BodyRepository
{
    private $body;

    public function __construct(Body $body)
    {
        $this->body = $body;
    }

    public function findById($id)
    {
        return $this->body->find($id);
    }

    public function findAll()
    {
        return $this->body->all();
    }

    public function findAllIds()
    {
        return $this->body->all()->pluck('id');
    }
}