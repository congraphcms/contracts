<?php 
/*
 * This file is part of the congraph/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Congraph\Contracts\Core;

/**
 * Interface for any repository in Congraph package
 * 
 * These are just basic functions that any repository should have.
 * This interface will be implemented by abstract repository.
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface StringHelperContract
{
	/**
	 * Creates slug from any string
	 * 
	 * @param  string $string
	 * 
	 * @return string
	 */
	public static function createSlug($string);

	/**
	 * Converts all accent characters to ASCII characters. (Wordpress function)
	 *
	 * If there are no accent characters, then the string given is just returned.
	 *
	 * @param string $string Text that might have accent characters
	 * 
	 * @return string Filtered string with replaced "nice" characters.
	 */
	public static function remove_accents( $string );
}