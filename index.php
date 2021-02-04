<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /', function($f3) {
    // echo "Adding index page";
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);


    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat free
$f3->run();

