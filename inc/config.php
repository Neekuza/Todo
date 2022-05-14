<?php
//show all errors
// ini_set('display_startup_error','On');
// ini_set('display_errors','On');
// error_reporting(-1);


// // requerie stuff
// require_once 'inc\vendor\autoload.php';


    // Require Composer's autoloader.
    require 'vendor/autoload.php';

    include 'error.reporting.php';
    // Using Medoo namespace.
    use Medoo\Medoo;
    // Connect the database.
    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'todo',
        'username' => 'root',
        'password' => '',
    ]);
     
    


    //directory variable
    $base_url = 'http://localhost';