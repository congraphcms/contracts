<?php
/*
 * This file is part of the cookbook/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cookbook\Contracts\Partitions;

/**
 * Interface for Partitioner class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface PartitionerContract
{

	/**
     * get current partition
     *
     * @return bool
     */
    public function getPartition();

	/**
     * get current partition ID
     *
     * @return bool
     */
    public function getPartitionId();

	/**
     * set partition
     * 
     * @param  $partition partition ID or partition object
     */
    public function setPartition($partition);
	
}