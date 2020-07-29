<?php

   define("WEBROOT","http://localhost/Examen");
   
   require_once "libs/Router.php";
   $router=new Router();
   $router->getRoute();
   
  