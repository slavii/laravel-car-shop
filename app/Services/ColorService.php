<?php

namespace App\Services;

use App\Repositories\ColorRepository;

class ColorService
{
    private $colorRepository;

    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }

    public function findById($id)
    {
        return $this->colorRepository->findById($id);
    }

    public function findAll()
    {
        return $this->colorRepository->findAll();
    }
}