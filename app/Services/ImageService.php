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
        foreach ($data as $datum) {
            $extension = $datum->getClientOriginalExtension();
            $fileName = str_shuffle(md5(date('Y-m-d\TH:i:s.u'))) . '.' . $extension;
            $datum->move(public_path() . '\assets\images', $fileName);
            $this->imageRepository->create($datum);
        }
    }
}