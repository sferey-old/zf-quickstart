<?php

// Define path to root directory
defined('ROOT_PATH')
|| define('ROOT_PATH', realpath(dirname(dirname(__DIR__))));

// Define path to src directory
defined('SRC_PATH')
|| define('SRC_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'src');

// Define path to application directory
defined('APPLICATION_PATH')
|| define('APPLICATION_PATH', SRC_PATH . DIRECTORY_SEPARATOR . 'application');

// Define application environment
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Require composer install 
if(! file_exists(ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')){
    die('Veuillez lancez la commande "composer install" pour initialiser cette application');
}

require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
    ->run();