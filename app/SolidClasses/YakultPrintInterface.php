<?php

namespace App\SolidClasses;

/**
 * Interface of printer classes
 */
interface YakultPrintInterface
{
    /**
     * Print values of received array
     *
     * @param array $values
     * @return void
     */
    public function printValues(array $values): void;
}