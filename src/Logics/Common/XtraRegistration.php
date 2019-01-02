<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:45 PM
 */

namespace Xtra\Logics\Auth;

/**
 * Standard interface for authentication
 *
 * @author Ali Irawan (boylevantz@gmail.com)
 * @package Xtra\Logics\Auth
 */
interface XtraAuthentication
{
    /**
     * This function should return boolean value whether the username(email) and password given is passed the authentication
     * @param $email email
     * @param $password password
     * @return mixed return object if passed the authentication, otherwise return null
     */
    public function authenticate ( $email, $password );

    /**
     * Get the user object model based on the given user_id
     * @param $user_id unique user id
     * @return mixed An user object, define in auth (providers.users.model)
     */
    public function getUser ( $user_id );

}