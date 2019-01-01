<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 2:26 PM
 */

namespace Xtra\Core;

/**
 * Interface FeatureImplementCheck used to check whether some features is not implemented yet,
 * the method should throw FeatureNotImplementedException
 *
 * @see \Xtra\Core\Errors\FeatureNotImplementedException
 * @package Xtra\Core
 */
interface FeatureImplementCheck
{

    /**
     * Check if the feature is implemented or not
     * @throws FeatureNotImplementedException
     */
    public function checkFeatureImplemented();
}