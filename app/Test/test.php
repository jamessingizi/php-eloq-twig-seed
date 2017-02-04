<?php require "vendor/autoload.php";
 use Illuminate\Database\Capsule\Manager as Capsule;
  /** * Configure the database and boot Eloquent */ 
  $capsule = new Capsule; 
  $capsule->addConnection([ 'driver' => 'mysql',
    'host' => 'host', 'database' => 'database',
    'username' => 'username', 
    'password' => 'password',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => 'prefix_' ]);
$capsule->setAsGlobal(); 
$capsule->bootEloquent();
// set timezone for timestamps etc 
date_default_timezone_set('UTC');