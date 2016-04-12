<?php
// Define path to root directory
defined('ROOT_PATH')
|| define('ROOT_PATH', realpath(dirname(__DIR__)));

// Define path to src directory
defined('SRC_PATH')
|| define('SRC_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'src');

// Define path to tests directory
defined('TESTS_PATH')
|| define('TESTS_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'tests');

// Define path to application directory
defined('APPLICATION_PATH')
|| define('APPLICATION_PATH', SRC_PATH . DIRECTORY_SEPARATOR . 'application');

// Define application environment
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', 'testing');

// Require composer install
if(! file_exists(ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')){
    die('Veuillez lancez la commande "composer install" pour initialiser cette application');
}

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/library'),
    get_include_path()))
);

require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require_once 'ControllerTestCase.php';
require_once 'ModelTestCase.php';
