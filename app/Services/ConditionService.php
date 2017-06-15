<?php

namespace App\Services;

use App\Repositories\ConditionRepository;

class ConditionService
{
    private $conditionRepository;

    public function __construct(ConditionRepository $conditionRepository)
    {
        $this->conditionRepository = $conditionRepository;
    }

    public function findById($id)
    {
        return $this->conditionRepository->findById($id);
    }

    public function findAll()
    {
        return $this->conditionRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->conditionRepository->findAllIds()->all();
    }
}