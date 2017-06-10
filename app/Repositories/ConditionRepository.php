<?php

namespace App\Repositories;

use App\Models\Condition;

class ConditionRepository
{
    private $condition;

    public function __construct(Condition $condition)
    {
        $this->condition = $condition;
    }

    public function findById($id)
    {
        return $this->condition->find($id);
    }

    public function findAll()
    {
        return $this->condition->all();
    }
}