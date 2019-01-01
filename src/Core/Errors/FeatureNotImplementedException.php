<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:54 PM
 */

namespace Xtra\Core\Errors;


use Xtra\Core\XtraException;

class FeatureNotImplementedException extends XtraException
{
    // Redefine the exception so message isn't optional
    public function __construct($code = 100, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct('Featured is not implemented yet', $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}