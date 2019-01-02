<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/2/19
 * Time: 9:06 PM
 */

namespace Xtra\Logics\Common;


use Xtra\Core\Errors\FeatureNotImplementedException;

class DefaultXtraRegistration implements XtraRegistration
{

    /**
     * Register user
     * @param $name name
     * @param $email email
     * @param $password password
     * @return mixed return the user object
     */
    public function register($name, $email, $password)
    {
        // TODO: Implement register() method.
        throw new FeatureNotImplementedException();

        $this->performRegister();
        $this->sendActivationEmail();
    }

    private function performRegister(){

    }

    private function sendActivationEmail(){

    }
}