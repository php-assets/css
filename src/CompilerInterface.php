<?php

namespace PhpAssets\Css;

interface CompilerInterface
{
    /**
     * Compile raw CSS or extension string.
     *
     * @param string $raw
     * @return string
     */
    public function compile($raw);
}
