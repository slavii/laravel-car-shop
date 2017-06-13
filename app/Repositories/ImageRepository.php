<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository
{
    private $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function create($data)
    {
        return $this->image->create($data)->id;
    }
}