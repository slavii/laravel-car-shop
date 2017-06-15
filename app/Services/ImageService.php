<?php

namespace App\Services;

use App\Repositories\ImageRepository;

class ImageService
{
    private $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function create($data)
    {
        return $this->imageRepository->create($data);
    }

    public function findById($id)
    {
        return $this->imageRepository->find($id);
    }

    public function findAllIds()
    {
        return $this->imageRepository->findAllIds()->all();
    }
}