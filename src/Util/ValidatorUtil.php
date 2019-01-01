<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:27 PM
 */

namespace Xtra\Util;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

/**
 * Class ValidatorUtil is util class for validation
 * @author Ali Irawan (boylevantz@gmail.com)
 * @package Xtra\Util
 */
class ValidatorUtil
{

    /**
     * Test the validation rule for the request given
     *
     * @param Validator $validator pass the validator object
     * @param Request $request request to be checked
     * @return boolean true if validation passed
     */
    public static function validateInput ( Validator $validator, Request $request )  {

        return $validator->fails();

    }
}