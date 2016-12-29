<?php
namespace Rudak\Sluggak\Utils;

use Rudak\Sluggak\Sluggak;

trait Slug
{
    public function getSlug()
    {
        return Sluggak::slugThis($this->getName());
    }
}