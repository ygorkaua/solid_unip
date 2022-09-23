<?php

namespace App\SolidClasses\Branding;

/**
 * Class to create Logo entity
 */
class Logo
{
    private string $yakultLogoColor = 'red';

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
}