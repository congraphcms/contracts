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
 * Interface for object resolver
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface ObjectResolverContract extends MapperContract
{
	
	/**
	 * Resolve objects
	 * 
	 * @param string $type - type of object that you want to resolve
	 * @param mixed $ids - ID or IDs of objects
	 * 
	 * @return mixed
	 */      
	public function resolve($type, $ids);

	/**
	 * Resolve objects with params
	 * 
	 * @param string $type - type of object that you want to resolve
	 * @param array 	$filter 	filters for object query
	 * @param int 		$offset 	how many records to skip for query
	 * @param int 		$limit 		how many records to take
	 * @param array 	$sort 		array of fields for sorting
	 * 
	 * @return array
	 */      
	public function resolveWithParams($type, $filter = [], $offset = 0, $limit = 0, $sort = []);

}