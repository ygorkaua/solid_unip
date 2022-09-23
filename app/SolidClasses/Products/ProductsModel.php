<?php

namespace App\SolidClasses\Products;

/**
 * Class to create products entity
 */
class ProductsModel
{
    private array $yakultProducts;

    /**
     * Create product
     *
     * @param string $name
     * @param int $quantity
     * @param float $price
     * @return bool
     */
    public function createProduct(string $name, int $quantity, float $price): bool
    {
        $this->yakultProducts[$name] = ['quantity' => $quantity, 'price' => $price];

        return true;
    }

    /**
     * Update product
     *
     * @param string $name
     * @param int $quantity
     * @return bool|string
     */
    public function updateProduct(string $name, int $quantity): bool|string
    {
        $result = key_exists($name, $this->yakultProducts) ?: "Yakult product with name $name don't exist";

        is_string($result) ?: $this->yakultProducts[$name] = $quantity;

        return $result;
    }

    /**
     * Delete product
     *
     * @param string $name
     * @return bool|string
     */
    public function deleteProduct(string $name): bool|string
    {
        $result = key_exists($name, $this->yakultProducts) ?: "Yakult product with name $name don't exist";

        if (is_string($result)) {
            return $result;
        }

        unset($this->yakultProducts[$name]);

        return true;
    }
}