<?php

namespace PhpAssets\Css;

/**
 * File interpreter for CSS files, extension language files or template files.
 */
interface InterpreterInterface
{
    /**
     * Get CSS extension language name from path.
     *
     * @param string $path
     * @return string
     */
    public function lang($path);

    /**
     * Get raw CSS or extension string from path.
     *
     * @param string $path
     * @return string
     */
    public function raw($path);
}
