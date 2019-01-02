<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:53 PM
 */

namespace Xtra\Core;

/**
 * Class XtraException is default root of exception
 * @package Xtra\Core
 */
class XtraException extends \Exception
{

    /**
     * XtraException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception message
     * @return string representation of the exception
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}