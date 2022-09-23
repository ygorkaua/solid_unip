<?php

namespace App\SolidClasses\Stock;

/**
 * Class to create product stock entity
 */
class StockModel
{
    private array $yakultStock;

    /**
     * Set stock
     *
     * @param string $name
     * @param int $yakultStock
     * @return bool
     */
    public function setYakultStock(string $name, int $yakultStock): bool
    {
        $this->yakultStock[$name] = $yakultStock;

        return true;
    }

    /**
     * Get stock
     *
     * @param string $name
     * @return string
     */
    public function getYakultStock(string $name): string
    {
        return key_exists($name, $this->yakultStock) ? $this->yakultStock[$name] : "Product stock with name $name don't exist";
    }
}