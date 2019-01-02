<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:54 PM
 */

namespace Xtra\Core\Errors;


use Xtra\Core\XtraException;

/**
 * Class AuthenticationException is type of exception for authentication
 * @author Ali Irawan (boylevantz@gmail.com)
 * @package Xtra\Core\Errors
 */
class AuthenticationException extends XtraException
{
    /**
     * AuthenticationException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 100, Exception $previous = null) {
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