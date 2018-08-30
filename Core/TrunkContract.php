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
 * Interface for in call cache
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface TrunkContract
{
	/**
	 * Add item or collection to trunk
	 * 
	 * @param  mixed  $data
	 * @param  boolean $included
	 * 
	 * @return void
	 */
	public function put($data);


	/**
	 * Check cache for item or collection
	 * 
	 * @param  mixed  	$key
	 * @param  string  	$type
	 * 
	 * @return boolean 
	 */
	public function has($key, $type);

	/**
	 * Get item or collection from cache
	 * 
	 * @param  mixed $key
	 * @param  mixed $type
	 * 
	 * @return Model | null
	 */
	public function get($key, $type);

	/**
	 * Clear item from cache
	 * 
	 * @param  mixed $key
	 * @param  mixed $type
	 * 
	 * @return void
	 */
	public function forget($key, $type);

	/**
	 * Clear type from cache
	 * 
	 * @param  mixed $type
	 * 
	 * @return void
	 */
	public function forgetType($type);
}