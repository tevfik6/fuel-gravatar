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

namespace Gravatar;

class GravatarException extends \FuelException {}

class Gravatar
{

	/**
	 * Get either a Gravatar URL or complete image tag for a specified email address.
	 *
	 * @param 	string 	$email 					The email address
	 * @param 	string 	$options['size'] 		Size in pixels, defaults to 80px [ 1 - 2048 ]
	 * @param 	string 	$options['default'] 	Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
	 * @param 	string 	$options['rating']		Maximum rating (inclusive) [ g | pg | r | x ]
	 * @return 	string 	$url 					containing a image URL 
	 * 
	 * @source http://gravatar.com/site/implement/images/php/
	 */
	public static function get( $email,  $options = null ) {

		$config = array(
			'size'		=> 64,
			'default'	=> 'mm',
			'rating'	=> 'g',
		);

		if ( $options )
		{
			$config = array_merge($config, $options);	
		}
		
		$url = 'http://www.gravatar.com/avatar/'.
				md5( strtolower( trim( $email ) ) ).
				"?s=".$config['size'].
				"&d=".$config['default'].
				"&r=".$config['rating'];

		return $url;
	}
}
