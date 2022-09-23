<?php

namespace App\SolidClasses\Branding;

/**
 * Class to create Copyright entity
 */
class Copyright
{
    private string $yakultCopyright = 'Yakult 2022';

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
}