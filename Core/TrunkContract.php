<?php 
/*
 * This file is part of the cookbook/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cookbook\Contracts\Core;

/**
 * Interface for in call cache
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
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
	 * Add item to trunk
	 * 
	 * @param  mixed  $data
	 * @param  boolean $included
	 * 
	 * @return void
	 */
	public function putItem($item);

	/**
	 * Add collection to trunk
	 * 
	 * @param  mixed  $data
	 * @param  boolean $included
	 * 
	 * @return void
	 */
	public function putCollection($collection);

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
	 * Check if item exists in cache
	 * 
	 * @param  mixed  $id
	 * @param  mixed  $type
	 * 
	 * @return boolean
	 */
	public function hasItem($id, $type);

	/**
	 * Check if collection exists in cache
	 * 
	 * @param  array  $params
	 * @param  mixed  $type
	 * 
	 * @return boolean
	 */
	public function hasCollection($params, $type);

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
	 * Get item by id and type
	 * 
	 * @param  mixed $id
	 * @param  mixed $type
	 * 
	 * @return Model | null
	 */
	public function getItem($id, $type);

	/**
	 * Get collection by params and type
	 * 
	 * @param  array $params
	 * @param  mixed $type
	 * 
	 * @return Model | null
	 */
	public function getCollection(array $params, $type);

	/**
	 * Clear item from cache
	 * 
	 * @param  mixed $id
	 * @param  mixed $type
	 * 
	 * @return void
	 */
	public function clear($id, $type);

	/**
	 * Clear type from cache
	 * 
	 * @param  mixed $type
	 * 
	 * @return void
	 */
	public function clearType($type);
}