<?php

namespace App\Services;

use App\Repositories\DoorRepository;

class DoorService
{
    private $doorRepository;

    public function __construct(DoorRepository $doorRepository)
    {
        $this->doorRepository = $doorRepository;
    }

    public function findById($id)
    {
        return $this->doorRepository->findById($id);
    }

    public function findAll()
    {
        return $this->doorRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->doorRepository->findAllIds()->all();
    }
}