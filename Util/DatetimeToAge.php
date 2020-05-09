<?php

namespace GaylordP\AgeBundle\Util;

class DatetimeToAge
{
    public static function get($date, \DateTime $since = null): int
    {
        if (is_string($date)) {
            $date = new \DateTime($date);
        }

        if (null === $since) {
            $since = new \DateTime();
        }

        $difference = $since->diff($date);

        return $difference->y;
    }
}
