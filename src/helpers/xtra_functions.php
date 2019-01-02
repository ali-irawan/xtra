<?php
/**
 * Common useful functions
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 1:54 PM
 */

/**
 * Access to xtra assets, such ass bootstrap css/js, etc.
 * @param $filename asset file name
 * @return string return public url path for the asset
 */
 function xtra_assets( $filename ) {
     return '/xtra-assets/' . $filename;
 }