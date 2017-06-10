<?php

namespace App\Services;

use App\Repositories\BodyRepository;

class BodyService
{
    private $bodyRepository;

    public function __construct(BodyRepository $bodyRepository)
    {
        $this->bodyRepository = $bodyRepository;
    }

    public function findById($id)
    {
        return $this->bodyRepository->findById($id);
    }

    public function findAll()
    {
        return $this->bodyRepository->findAll();
    }
}