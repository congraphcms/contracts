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
 * Interface for Field Handler Factory class
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface FieldHandlerFactoryContract
{
	/**
	 * Make appropriate AttributeHandler by attribute field type.
	 * 
	 * @param string $attributeFieldType
	 * 
	 * @return Congraph\Contracts\Eav\AttributeHandlerContract
	 */
	public function make($attributeFieldType);
}