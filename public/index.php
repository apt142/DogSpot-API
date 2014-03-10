<?php
/**
 * Index
 *
 * PHP version 5.3
 *
 * @category DogSpot-API
 * @package  DogSpot-API
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

// Are we ready?
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    exit("\nPlease run `composer install` to install dependencies.\n\n");
}

// Bootstrap our application with the Composer autoloader
$loader = require __DIR__ . '/../vendor/autoload.php';

// Setup the namespace for our own namespace
$loader->add('DogSpot', __DIR__ );

// Init Silex
$app = new Silex\Application();

$app['debug'] = true;


// Path
$app->get(
    '/',
    function() use($app) {
        return "Hello World!";
    }
);


$app->get(
    '/sizes',
    function() use($app) {
        $size = new DogSpot\controllers\Sizes();
        return json_encode($size->get_sizes());
    }
);


$app->run();
