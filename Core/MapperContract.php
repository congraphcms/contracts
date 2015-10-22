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

use Closure;

/**
 * Interface for MapperTrait
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface MapperContract
{

	/**
	 * Register mappings.
	 *
	 * @param  array  $mappings
	 * @return void
	 */
	public static function maps(array $mappings, $key = 'default');

	/**
	 * Register a fallback mapper callback.
	 *
	 * @param  \Closure  $mapper
	 * @return void
	 */
	public static function mapUsing(Closure $mapper, $key = 'default');

	/**
	 * Get mappings for the resource.
	 *
	 * @param  mixed  $command
	 * @return string
	 */
	public static function getMappings($resource, $key = 'default');

	/**
	 * Resolve mapping end return result
	 * 
	 * @param mixed $resource - mapping name to be resolved
	 * @param array $parameters - params for resolver
	 * @param string $key - mapping section
	 * 
	 * @throws  Exception
	 * 
	 * @return  mixed
	 */
	public function resolveMapping($resource, $parameters = [], $key = 'default', $method = null);

	/**
	 * Handle and run the resolver
	 * 
	 * @param mixed $resolver
	 * @param array $parameters - params for resolver
	 * 
	 * @return  mixed
	 */
	public function runResolver($resolver, $parameters = [], $method = null);

}