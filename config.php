<?php

/**
  * Configuration for database connection
  *
  */

 $env="dev"; //test, dev, local, prod
  
switch($env){
    
    case "dev":
    case "test":
    case "prod":
        $host       = "ideabytesdb.c6hujshgwzfd.us-east-1.rds.amazonaws.com";
        $username   = "tracer";
        $password   = "R2VJ6tMBaXbwhyLu2fsN4vax";
        $dbname     = "tracer"; // will use later
        $dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
        $options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
        $table      = "sample_users";
        break;
    case "local":
    default:
    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "sample_test"; // will use later
    $dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
    $options    = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                  );
    $table      = "users";
} 
