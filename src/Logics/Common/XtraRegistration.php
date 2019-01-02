<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:45 PM
 */

namespace Xtra\Logics\Common;

/**
 * Standard interface for registration
 *
 * @author Ali Irawan (boylevantz@gmail.com)
 * @package Xtra\Logics\Common
 */
interface XtraRegistration
{
    /**
     * Register user
     * @param $name name
     * @param $email email
     * @param $password password
     * @return mixed return the user object
     */
    public function register ( $name, $email, $password );


}