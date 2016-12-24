<?php
namespace Rudak\Sluggak\Utils;

trait Slug
{
    public function getSlug()
    {
        return $this->getName();
    }
}