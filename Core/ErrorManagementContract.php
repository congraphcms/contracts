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
interface ErrorManagementContract
{
	
	/**
	 * Add messages to error message bag
	 * 
	 * @param array $messages (optional)
	 * 
	 * @return boolean
	 */      
	public function addErrors($messages = []);

	/**
	 * Set error messages - deletes previous messages
	 * 
	 * @param MessageProviderInterface | array $messages (optional)
	 * 
	 * @return void
	 */      
	public function setErrors($messages = []);

	/**
	 * Check if error message bag has eny messages
	 * 
	 * @return boolean
	 */
	public function hasErrors();

	/**
	 * Get all error messages
	 * 
	 * @return boolean
	 */
	public function getErrors();

	/**
	 * Get error bag
	 * return whole errors object
	 * 
	 * @return boolean
	 */
	public function getErrorBag();

}