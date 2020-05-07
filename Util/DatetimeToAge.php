<?php

namespace GaylordP\AgeBundle\Util;

class DatetimeToAge
{
    public static function get(\DateTime $date, \DateTime $since = null): int
    {
        if (null === $since) {
            $since = new \DateTime();
        }

        $difference = $since->diff($date);

        return $difference->y;
    }
}
