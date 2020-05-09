<?php

namespace GaylordP\AgeBundle\Twig;

use GaylordP\AgeBundle\Util\DatetimeToAge;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Extension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'age',
                [DatetimeToAge::class, 'get']
            ),
        ];
    }
}
