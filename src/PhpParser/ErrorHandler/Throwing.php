<?php 

namespace GLPchp\Compile\PhpParser\ErrorHandler;

use GLPchp\Compile\PhpParser\Error;
use GLPchp\Compile\PhpParser\ErrorHandler;

/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements ErrorHandler
{
    public function handleError(Error $error) {
        throw $error;
    }
}
