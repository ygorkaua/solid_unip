<?php

namespace App\SolidClasses\Formatter;

use DateTime;

/**
 * Class to format date
 */
class DateFormatter
{
    /**
     * @param DateTime $dateTime
     */
    public function __construct(public DateTime $dateTime){}

    /**
     * Return now date formatted (E.g.: 01/01/22 00:00)
     *
     * @return string
     */
    public function getFormattedNowDate(): string
    {
        return $this->dateTime->format('d/m/y h:i');
    }
}