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

// Include Composer Installs
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions

$app->run();
