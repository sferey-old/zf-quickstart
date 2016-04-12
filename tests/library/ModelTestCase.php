<?php
class ModelTestCase extends PHPUnit_Framework_TestCase
{
    public $application;
    public $bootstrap;

    public function setUp()
    {
        $this->application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );

        $this->bootstrap = array($this, 'appBootstrap');

        // run the database set up script to recreate the database
        require ROOT_PATH . '/data/scripts/load.sqlite.php';

        parent::setUp();
    }

    public function tearDown()
    {

    }

    public function appBootstrap()
    {
        $this->application->bootstrap();
    }
}