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
 * Interface for any repository in Cookbook package
 * 
 * These are just basic functions that any repository should have.
 * This interface will be implemented by abstract repository.
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface RepositoryContract
{
	
	/**
	 * Inserting model into database
	 * 
	 * @param array 	$model 		parameters for object creation.
	 */
	public function create($model);

	/**
	 * Updating model in database
	 *
	 * @param int 		$id 		ID of object to be updated
	 * @param array 	$model 		parameters for object update.
	 */
	public function update($id, $model);

	/**
	 * Deleting model with given ID from database
	 * 
	 * @param int 		$id 		ID of object to be deleted.
	 */
	public function delete($id);

	/**
	 * Get object by ID
	 * 
	 * @param int 		$id 		ID of object to be fetched
	 */
	public function fetchById($id);

	/**
	 * Get objects
	 * 
	 * @param array 	$filter 	filters for object query
	 * @param int 		$offset 	how many records to skip for query
	 * @param int 		$limit 		how many records to take
	 * @param array 	$sort 		array of fields for sorting
	 */
	public function get($filter = [], $offset = 0, $limit = 0, $sort = []);
}