<?php

namespace App\SolidClasses\Formatter;

/**
 * Class to format price to friendly shape
 */
class PriceFormatter
{
    /**
     * Return formatted price (E.g.: R$ 1.000,00)
     *
     * @param array $yakultProducts
     * @param string $name
     * @return string
     */
    public function getFormattedPrice(array $yakultProducts, string $name): string
    {
        return key_exists($name, $yakultProducts)
            ? 'R$ ' . number_format($yakultProducts[$name]['price'], 2)
            : "Yakult product with name $name don't exist";
    }
}