<?php
/**
 * Access to xtra assets, such ass bootstrap css/js, etc.
 * @param $filename asset file name
 * @return string return public url path for the asset
 */

 function xtra_assets( $filename ) {
     return '/xtra-assets/' . $filename;
 }