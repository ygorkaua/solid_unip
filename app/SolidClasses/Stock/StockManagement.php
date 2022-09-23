<?php

namespace App\SolidClasses\Stock;

/**
 * Class to manage stock
 */
class StockManagement
{
    /**
     * Remove item quantity from stock
     *
     * @param array $yakultStock
     * @param string $name
     * @param int $quantity
     * @return int|string
     */
    public function removeFromStock(array $yakultStock, string $name, int $quantity): int|string
    {
        if (key_exists($name, $yakultStock)) {
            return $yakultStock[$name] >= $quantity
                ? $yakultStock[$name] -= $quantity
                : 'Could not remove requested quantity from Yakult stock';
        }

        return "Yakult product stock with name $name don't exist";
    }

    /**
     * Check if item stock is low
     *
     * @param array $yakultStock
     * @param string $name
     * @return bool|string
     */
    public function isStockLow(array $yakultStock, string $name): bool|string
    {
        if (key_exists($name, $yakultStock)) {
            return $yakultStock[$name] <= 5;
        }

        return "Yakult product stock with name $name don't exist";
    }

    /**
     * Get all products with low stock (under 5)
     *
     * @param array $yakultStock
     * @return array
     */
    public function getAllProductsWithStockLow(array $yakultStock): array
    {
        $lowStock = [];

        foreach ($yakultStock as $item => $quantity) {
            $quantity >= 5 ?: $lowStock[$item] = $quantity;
        }

        return $lowStock;
    }
}