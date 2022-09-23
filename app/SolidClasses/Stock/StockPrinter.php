<?php

namespace App\SolidClasses\Stock;

use App\SolidClasses\YakultPrintInterface;

/**
 * Class to print stock values
 */
class StockPrinter implements YakultPrintInterface
{
    /**
     * Print values of stock array
     *
     * @param array $values
     * @return void
     */
    public function printValues(array $values): void
    {
        foreach ($values as $item => $yakultStock)
        {
            echo "Yakult $item = $yakultStock" . PHP_EOL;
        }
    }
}