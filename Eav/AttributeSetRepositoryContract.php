<?php
/*
 * This file is part of the cookbook/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cookbook\Contracts\Eav;

use Cookbook\Contracts\Core\RepositoryContract;

/**
 * Interface for Attribute Set Repository class
 *
 * @uses  Cookbook\Contracts\Core\RepositoryContract
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface AttributeSetRepositoryContract extends RepositoryContract
{
	/**
	 * Delete attribute sets vy entity type ID and its set attributes
	 * 
	 * @param int $entityTypeID - ID of entity type
	 * 
	 * @return int
	 * 
	 * @throws InvalidArgumentException, Exception
	 */
	public function deleteByEntityType($entityTypeID);
}