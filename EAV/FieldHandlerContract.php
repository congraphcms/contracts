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

/**
 * Interface for Field Handler class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface FieldHandlerContract
{

	/**
	 * Make changes to attribute before handing it to application
	 * 
	 * @param stdClass $attribute
	 * 
	 * @return object
	 */
	public function transformAttribute(\stdClass $attribute);

	/**
	 * Clean all related values and set entries for given attribute
	 * 
	 * Takes attribute that needs to be deleted,
	 * and deletes all related values and set entries
	 * 
	 * @param stdClass $attribute
	 * 
	 * @return boolean
	 */
	public function sweepAfterAttribute(\stdClass $attribute);

	/**
	 * Clean all related values for given attribute option
	 * 
	 * Takes attribute option that needs to be deleted,
	 * and deletes all related values
	 * 
	 * @param stdClass $option
	 * 
	 * @return boolean
	 */
	public function sweepAfterOption(\stdClass $option);

	/**
	 * Clean all related values for given set attribute
	 * 
	 * Takes set attribute that needs to be deleted,
	 * and deletes all related values
	 * 
	 * @param stdClass $setAttribute
	 * 
	 * @return boolean
	 */
	public function sweepAfterSetAttribute(\stdClass $setAttribute);

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
	 * Insert value in database
	 * 
	 * Takes attribute value params and attribute definition
	 * 
	 * @param array $valueParams
	 * @param object $attributeDefinition
	 * 
	 * @return boolean
	 */
	public function insert($valueParams, $attributeDefinition);

	/**
	 * Update value in database
	 * 
	 * Takes attribute value params and attribute definition
	 * 
	 * @param array $valueParams
	 * @param object $attributeDefinition
	 * 
	 * @return boolean
	 */
	public function update($valueParams, $attributeDefinition);

}