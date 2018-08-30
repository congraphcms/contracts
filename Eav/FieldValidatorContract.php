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

/**
 * Interface for Field Handler class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface FieldValidatorContract
{
	/**
	 * Check for specific rules and validation on attribute insert
	 * 
	 * Called after standard attribute validation with referenced attribute params
	 * depending on boolean value returned by this function 
	 * attribute insert will continue or stop the execution
	 * 
	 * @param array $params
	 * 
	 * @return boolean
	 */
	public function validateAttributeForInsert(array &$params);

	/**
	 * Check for specific rules and validation on attribute update
	 * 
	 * Called after standard attribute validation with referenced attribute params
	 * depending on boolean value returned by this function 
	 * attribute update will continue or stop the execution
	 * 
	 * @param array $params
	 * @param object $attribute
	 * 
	 * @return boolean
	 */
	public function validateAttributeForUpdate(array &$params, $attribute);
	
	/**
	 * Validate attribute value
	 * 
	 * This function can be extended by specific attribute handler
	 * 
	 * @param array $valueParams
	 * @param object $attributeDefinition
	 * 
	 * @return boolean
	 */
	public function validateValue($valueParams, $attributeDefinition);

}