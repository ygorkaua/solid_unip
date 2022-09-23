<?php

namespace App\NotSolidClasses;

/**
 * Interface of printer classes
 */
interface YakultPrintInterface
{
    /**
     * Print products information
     *
     * @return void
     */
    public function printProducts(): void;

    /**
     * Print products stock information
     *
     * @return void
     */
    public function printStock(): void;
}