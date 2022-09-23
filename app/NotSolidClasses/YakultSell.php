<?php

namespace App\NotSolidClasses;

use DateTime;

/**
 * Class to manage, create and print products and logo and format dates and price
 */
class YakultSell implements YakultPrintInterface
{
    private array $yakultProducts;
    private string $yakultLogoColor = 'red';

    /**
     * @param DateTime $dateTime
     */
    public function __construct(public DateTime $dateTime = new DateTime()) {}

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

    /**
     * Set logo color
     *
     * @param string $color
     * @return bool
     */
    public function setLogoColor(string $color): bool
    {
        $this->yakultLogoColor = $color;

        return true;
    }

    /**
     * Get logo color
     *
     * @return string
     */
    public function getLogoColor(): string
    {
        return $this->yakultLogoColor;
    }

    /**
     * Return formatted price (E.g.: R$ 1.000,00)
     *
     * @param string $name
     * @return string
     */
    public function getFormattedPrice(string $name): string
    {
        return key_exists($name, $this->yakultProducts)
            ? 'R$ ' . number_format($this->yakultProducts[$name]['price'], 2, ',', '.')
            : "Yakult product with name $name don't exist";
    }

    /**
     * Return now date formatted (E.g.: 01/01/22 00:00)
     *
     * @return string
     */
    public function getFormattedNowDate(): string
    {
        return $this->dateTime->format('d/m/y H:i');
    }

    /**
     * Print products information
     *
     * @return void
     */
    public function printProducts(): void
    {
        foreach ($this->yakultProducts as $name => $values)
        {
            echo "Yakult $name = Quantity:"  . $values['quantity'] . ", Price: " . $values['price'] . PHP_EOL;
        }
    }

    /**
     * Print products stock information
     *
     * @return void
     */
    public function printStock(): void {}
}