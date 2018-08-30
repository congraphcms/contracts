<?php
/*
 * This file is part of the congraph/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Congraph\Contracts\Eav;

use Congraph\Contracts\Core\RepositoryContract;

/**
 * Interface for Attribute Set Repository class
 *
 * @uses  Congraph\Contracts\Core\RepositoryContract
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
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