<?php
/*
 * This file is part of the cookbook/contracts package.
 *
 * (c) Nikola Plavšić <nikolaplavsic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cookbook\Contracts\URL;

use Cookbook\Contracts\Core\RepositoryContract;

/**
 * Interface for Route Repository class
 *
 * @uses  Cookbook\Contracts\Core\RepositoryContract
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	cookbook/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface RouteRepositoryContract extends RepositoryContract
{
	/**
	 * Resolve url for any object
	 * 
	 * @param $objectID 	ID of object
	 * @param $objectType 	Type of object
	 * @param $name 		title or name of object from which url name will be created
	 * @param $localeID 	ID of locale
	 * @param $urlRoot 		root to which name will be appended
	 * @param $options 		array of options for url:
	 *                        keep_redirect - if there is already a url for this object it will be kept as redirect
	 *                        strict 		- if name isn't valid it will return error (otherwise will change it)
	 */
	public function resolveUrl($objectID, $objectType, $name, $localeID = 0, $urlRoot = '', $options = array());
}