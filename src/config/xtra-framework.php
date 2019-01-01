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
         "tenant" => "/xtra-tenant",
         "role" => "/xtra-role",
         "user" => "/xtra-user",
         "user-group" => "/xtra-user-group"
     ]
 ];