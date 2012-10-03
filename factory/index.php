<?php


ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

require_once 'Factory.php';
require_once 'Myclass.php';
require_once 'Myclass2.php';


$my_class = Myclass::factory();

unset($my_class);

$my_class = Factory::create('Myclass2');

unset($my_class);

$my_class = Myclass::create();

Factory::create();