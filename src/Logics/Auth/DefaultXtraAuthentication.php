<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:46 PM
 */

namespace Xtra\Logics\Auth;


use Xtra\Core\Errors\AuthenticationException;
use Xtra\Core\Errors\FeatureNotImplementedException;
use Xtra\Core\FeatureImplementCheck;

class DefaultXtraAuthentication implements XtraAuthentication, FeatureImplementCheck
{
    /**
     * @inheritDoc
     */
    public function checkFeatureImplemented()
    {
        if (config('auth.providers.users.driver') != 'eloquent') {
            throw new FeatureNotImplementedException();
        }
    }

    /**
     * @inheritDoc
     */
    public function authenticate($email, $password)
    {
        $this->checkFeatureImplemented();

        $className = config('auth.providers.users.model');
        $object = new $className;

        $user = $object->where('email', $email)->first();
        if ($user != null) {

            // Check the password
            $password_check = password_verify($password, $user->password);
            if ($password_check) {
                return $user;
            } else {
                return null;
            }
        } else {
            // User not found
            return null;
        }


    }

    /**
     * @inheritDoc
     */
    public function getUser($user_id)
    {
        $this->checkFeatureImplemented();

        $className = config('auth.providers.users.model');
        $object = new $className;

        $user = $object->find($user_id);
        if ($user != null) {

            return $user;

        } else {
            // User ID specified not found
            throw new AuthenticationException('User ID specified not found');
        }


    }

}