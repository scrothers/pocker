<?php
/*
 * Copyright 2012 (c) Layerworx LLC
 * All rights reserved, 2012 to Present
 *
 * @author    Steven Crothers <steven@layerworx.com>
 * @module    pocker
 * @copyright 2012 to Present, Layerworx LLC
 */

namespace Pocker\Exception;

use Exception;

/**
 * Class BaseException
 *
 * Creates a base exception class in which new exceptions can be extended
 * keeping a uniform feel to all of the exceptions in the Pocker library.
 *
 * @package Pocker\Exception
 */
class BaseException extends Exception
{
    // Error codes for use through the application
    const ERROR_GENERAL = 0;
    const ERROR_CONNECT = 1;
    const ERROR_AUTH = 2;

    /**
     * BaseException constructor for throwing application level exceptions.
     *
     * This is simply an extension of the system Exception class with a
     * requirement that the message is not null.
     *
     * @param string $message A message that is displayed to the client.
     * @param int $code A code that is returned to the client.
     * @param Exception $previous A previous exception for doing stack traces.
     */
    public function __construct($message, $code = self::ERROR_GENERAL, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * String method to return the exception message.
     *
     * Returns a specifically crafted string for exceptions to maintain uniformity.
     *
     * @return string
     */
    public function __toString()
    {
        return "[POCKER] ({$this->code}): {$this->message}\n";
    }
}