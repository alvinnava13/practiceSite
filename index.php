<?php

require_once('vendor/autoload.php');

ini_set('display_errors', true);
error_reporting(E_ALL);


//Create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->run();