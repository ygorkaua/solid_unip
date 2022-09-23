<?php

namespace App\SolidClasses\Products;

use App\SolidClasses\YakultPrintInterface;

/**
 * Class to print products values
 */
class ProductsPrinter implements YakultPrintInterface
{
    /**
     * Print values of products array
     *
     * @param array $values
     * @return void
     */
    public function printValues(array $values): void
    {
        foreach ($values as $name => $value)
        {
            echo "Yakult $name = Quantity:"  . $value['quantity'] . ", Price: " . $value['price'] . PHP_EOL;
        }
    }
}