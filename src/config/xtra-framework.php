<?php
 /**
  * This is xtra-framework config file
  */
 return [
     /**
      * Currently only bootstrap is provided, other CSS frameworks will be added later
      * One of this value: bootstrap
      */
     "css" => "bootstrap",

     /**
      * You can comment or comment below for disabling the routes
      * For each modules available you can set your own route
      */
     "modules" => [
         "login" => "/xtra-login",
         "logout" => "/xtra-logout",
         "home" => "/xtra-home",
         "tenant" => "/xtra-tenant",
         "role" => "/xtra-role",
         "user" => "/xtra-user",
         "user_group" => "/xtra-user-group"
     ],

     "home_page" => [

         // Whether to put navbar or not
         "navbar" => true,

         // Navbar type, currently only 'top' is supported
         "navbar_type" => 'top',

         // Restricted true, means the home page is restricted for authenticated users only
         "restricted" => true,
     ]
 ];