<?php
require "../vendor/autoload.php";


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint; 
  /** * Configure the database and boot Eloquent */ 
  $capsule = new Capsule; 
  $capsule->addConnection([ 'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'glive',
    'username' => 'root', 
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => '' ]);
$capsule->setAsGlobal(); 
$capsule->bootEloquent();
// set timezone for timestamps etc 
date_default_timezone_set('UTC');


//Creating schema
 Capsule::schema()->create('test', function (Blueprint $table) {
  $table->increments('id'); 
  $table->string('username'); 
  $table->string('first_name')->nullable(); 
  $table->string('last_name')->nullable(); 
  $table->string('email'); 
  $table->string('password'); 
  $table->timestamps(); 
  });
  //Droping Schema Capsule::schema()->dropIfExists('users');