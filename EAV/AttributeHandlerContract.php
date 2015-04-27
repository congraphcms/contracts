<?php
/*
 * This file is part of the cookbook/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cookbook\Contracts\EAV;

/**
 * Interface for Attribute Handler class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface AttributeHandlerContract
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
	public function checkAttributeForInsert(array &$params);

	/**
	 * Check for specific rules and validation on attribute update
	 * 
	 * Called after standard attribute validation with referenced attribute params
	 * depending on boolean value returned by this function 
	 * attribute update will continue or stop the execution
	 * 
	 * @param array $params
	 * 
	 * @return boolean
	 */
	public function checkAttributeForUpdate(array &$params);

	/**
	 * Make changes to attribute before handing it to application
	 * 
	 * @param $attribute
	 * 
	 * @return object
	 */
	public function transformAttribute($attribute);

	/**
	 * Clean all related values and set entries for given attribute
	 * 
	 * Takes attribute that needs to be deleted,
	 * and deletes all related values and set entries
	 * 
	 * @param $attribute
	 * 
	 * @return boolean
	 */
	public function sweepAfterAttribute($attribute);

	/**
	 * Clean all related values for given attribute option
	 * 
	 * Takes attribute option that needs to be deleted,
	 * and deletes all related values
	 * 
	 * @param $option
	 * 
	 * @return boolean
	 */
	public function sweepAfterOption($option);

	/**
	 * Clean all related values for given set attribute
	 * 
	 * Takes set attribute that needs to be deleted,
	 * and deletes all related values
	 * 
	 * @param $setAttribute
	 * 
	 * @return boolean
	 */
	public function sweepAfterSetAttribute($setAttribute);

	/**
	 * Take attribute value and transform it for output (management API use)
	 * 
	 * @param $value
	 * @param $attribute
	 * @param $options
	 * 
	 * @return mixed
	 */
	public function transformManagementValue($value, $attribute, $options);

	/**
	 * Take attribute value and transform it for output (delivery API use)
	 * 
	 * @param $value
	 * @param $attribute
	 * @param $options
	 * 
	 * @return mixed
	 */
	public function transformValue($value, $attribute, $options);

	/**
	 * Take attribute values and bulk transform them for output (delivery API use)
	 * 
	 * @param $values
	 * @param $with
	 * 
	 * @return mixed
	 */
	public function bulkTransformValues($values, $lang_id, $with);

	/**
	 * Provide default value for attribute
	 * 
	 * @param $value
	 * @param $attribute
	 * @param $options
	 * 
	 * @return mixed
	 */
	public function getDefaultValue($attribute, $options);

	/**
	 * Perform validation and preparation, and 
	 * update attribute value in database
	 * 
	 * Takes attribute value params and attribute definition
	 * 
	 * @param array $valueParams
	 * @param $attributeDefinition
	 * 
	 * @return boolean
	 */
	public function updateValue($valueParams, $attributeDefinition);

}