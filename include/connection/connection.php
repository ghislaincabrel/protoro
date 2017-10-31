<?php

// Database Constants
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", " ");
define("DB_NAME", "registration");
   
// 1. Create a database connection
   try{
        $bdd= new PDO('mysql:host=DB_HOST;dbname=DB_NAME','DB_USER',' DB_PASS')  ;
         }
   catch(exception $e){
         die('erreur :' .$e->getMessage());
         }
}
?>