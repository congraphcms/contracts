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
 * Interface for Field Handler Factory class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface FieldFactoryContract
{
	/**
	 * Make appropriate AttributeHandler by attribute field type.
	 * 
	 * @param string $attributeFieldType
	 * 
	 * @return Cookbook\Contracts\EAV\AttributeHandlerContract
	 */
	public function make($attributeFieldType);
}