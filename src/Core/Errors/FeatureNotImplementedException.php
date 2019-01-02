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
 * Class FeatureNotImplementedException is used for determine type of exception if the feature is not implemented yet
 * @author Ali Irawan (boylevantz@gmail.com)
 * @package Xtra\Core\Errors
 */
class FeatureNotImplementedException extends XtraException
{
    /**
     * FeatureNotImplementedException constructor.
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($code = 100, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct('Featured is not implemented yet', $code, $previous);
    }

    /**
     * Get the exception message
     * @return string representation of the exception
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}