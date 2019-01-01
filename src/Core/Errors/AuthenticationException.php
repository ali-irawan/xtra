<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:54 PM
 */

namespace Xtra\Core\Errors;


use Xtra\Core\XtraException;

class AuthenticationException extends XtraException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 100, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}