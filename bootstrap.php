<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.5
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */


Autoloader::add_core_namespace('Gravatar');

Autoloader::add_classes(array(
	'Gravatar\\GravatarException'					=> __DIR__.'/classes/gravatar.php',
	'Gravatar\\Gravatar'							=> __DIR__.'/classes/gravatar.php'
));
