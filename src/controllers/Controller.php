<?php
/**
 * Controller
 *
 * PHP version 5.3
 *
 * @category Controller
 * @package  DogSpot
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

namespace DogSpot\controllers;

/**
 * Class Controller
 *
 * Controller Parent Class
 *
 * @category Controller
 * @package  DogSpot
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

class Controller {
    private $_app;

    public function init($app) {
        $this->_app = $app;
    }

}
