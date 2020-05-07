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
                [$this, 'age']
            ),
        ];
    }

    public function age($date, \DateTime $since = null): int
    {
        if (is_string($date)) {
            $date = new \DateTime($date);
        }

        if (null === $since) {
            $since = new \DateTime();
        }

        return DatetimeToAge::get($date, $since);
    }
}
