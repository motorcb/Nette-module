<?php

/**
 * My Application bootstrap file.
 */
use Nette\Application\Routers\Route;


// Load Nette Framework or autoloader generated by Composer
require LIBS_DIR . '/autoload.php';


// Configure application
$configurator = new Nette\Config\Configurator;


// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode($configurator::AUTO);
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->addDirectory(LIBS_DIR)
	->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config/config.neon');
$container = $configurator->createContainer();

// Setup router
//$container->router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
//$container->router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

$container->router[] = new Route('//m.domena.local/<presenter>/<action>[/<id>]', array(
    'module' => 'Mobile',
    'presenter' => 'Homepage',
    'action' => 'default',
) );
$container->router[] = new Route('//new.domena.local/<presenter>/<action>[/<id>]', array(
    'module' => 'New',
    'presenter' => 'Homepage',
    'action' => 'default',
) );


// Configure and run the application!
$container->application->run();
