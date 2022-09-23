<?php

namespace App\NotSolidClasses;

/**
 * Class to manage, create and print product stock and copyright
 */
class YakultStock implements YakultPrintInterface
{
    private array $yakultStock;
    private string $yakultCopyright = 'Yakult 2022';

    /**
     * Set stock
     *
     * @param string $name
     * @param int $yakultStock
     * @return bool
     */
    public function setStock(string $name, int $yakultStock): bool
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
    public function getStock(string $name): string
    {
        return key_exists($name, $this->yakultStock) ? $this->yakultStock[$name] : "Yakult product stock with name $name don't exist";
    }

    /**
     * Remove item quantity from stock
     *
     * @param string $name
     * @param int $quantity
     * @return int|string
     */
    public function removeFromStock(string $name, int $quantity): int|string
    {
        if (key_exists($name, $this->yakultStock)) {
            return $this->yakultStock[$name] >= $quantity
                ? $this->yakultStock[$name] -= $quantity
                : 'Could not remove requested quantity from stock';
        }

        return "Yakult product stock with name $name don't exist";
    }

    /**
     * Check if item stock is low
     *
     * @param string $name
     * @return bool|string
     */
    public function isStockLow(string $name): bool|string
    {
        if (key_exists($name, $this->yakultStock)) {
            return $this->yakultStock[$name] <= 5;
        }

        return "Yakult product stock with name $name don't exist";
    }

    /**
     * Get all products with low stock (under 5)
     *
     * @return array
     */
    public function getAllProductsWithStockLow(): array
    {
        $lowStock = [];

        foreach ($this->yakultStock as $item => $quantity) {
            $quantity >= 5 ?: $lowStock[$item] = $quantity;
        }

        return $lowStock;
    }

    /**
     * Get copyright
     *
     * @return string
     */
    public function getCopyright(): string
    {
        return $this->yakultCopyright;
    }

    /**
     * Set copyright
     *
     * @param string $yakultCopyright
     * @return void
     */
    public function setCopyright(string $yakultCopyright): void
    {
        $this->yakultCopyright = $yakultCopyright;
    }

    /**
     * Print products stock information
     *
     * @return void
     */
    public function printStock(): void
    {
        foreach ($this->yakultStock as $item => $yakultStock)
        {
            echo "Yakult $item = $yakultStock" . PHP_EOL;
        }
    }

    /**
     * Print products information
     *
     * @return void
     */
    public function printProducts(): void {}
}