<?php

namespace App\Services;

use App\Repositories\EquipmentRepository;

class EquipmentService
{
    private $equipmentRepository;

    public function __construct(EquipmentRepository $equipmentRepository)
    {
        $this->equipmentRepository = $equipmentRepository;
    }

    public function findById($id)
    {
        return $this->equipmentRepository->findById($id);
    }

    public function findAll()
    {
        return $this->equipmentRepository->findAll();
    }

    public function create($data)
    {
        return $this->equipmentRepository->create($data);
    }

    public function findAllIds()
    {
        return $this->equipmentRepository->findAllIds()->all();
    }

}