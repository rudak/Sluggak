<?php
namespace Rudak\Sluggak\Twig;

use Rudak\Sluggak\Sluggak;
use Twig_Extension;
use Twig_SimpleFilter;

class AppExtension extends Twig_Extension
{
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('slug', [$this, 'slugFilter']),
        ];
    }

    public function slugFilter($str)
    {
        return Sluggak::slugThis($str);
    }

    public function getName()
    {
        return 'app_extension';
    }
}