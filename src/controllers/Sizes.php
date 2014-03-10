<?php
/**
 * Sizes
 *
 * PHP version 5.3
 *
 * @category Graphite
 * @package  Core
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link     http://g.lonefry.com
 */

namespace DogSpot\controllers;


/**
 * Class Sizes
 *
 * What does this class do?
 *
 * @category controllers
 * @package  Core
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link     http://g.lonefry.com
 */

class Sizes extends Controller {

    public function get_sizes() {
        $sizes = array(
            'tiny',
            'small',
            'medium',
            'large',
            'extra large'
        );
        return $sizes;
    }
}
