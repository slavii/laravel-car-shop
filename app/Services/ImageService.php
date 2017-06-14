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
}