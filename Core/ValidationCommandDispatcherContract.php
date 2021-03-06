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

use Closure;
use Illuminate\Contracts\Bus\QueueingDispatcher;

/**
 * Interface for Congraph Command Dispatcher with validators
 * 
 * @author  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @copyright  	Nikola Plavšić <nikolaplavsic@gmail.com>
 * @package 	congraph/contracts
 * @since 		0.1.0-alpha
 * @version  	0.1.0-alpha
 */
interface ValidationCommandDispatcherContract extends QueueingDispatcher
{
	
	/**
	 * Validate a command with its appropriate validator.
	 *
	 * @param  mixed  $command
	 * 
	 * @return mixed
	 */
	public function validate($command);

	/**
	 * Get the validator class for the given command.
	 *
	 * @param  mixed  $command
	 * @return string
	 */
	public function getValidatorClass($command);

	/**
	 * Get the validator method for the given command.
	 *
	 * @param  mixed  $command
	 * @return string
	 */
	public function getValidatorMethod($command);

	/**
	 * Register command-to-validator mappings.
	 *
	 * @param  array  $validators
	 * @return void
	 */
	public function mapValidators(array $validators);

	/**
	 * Register a fallback validatorMapper callback.
	 *
	 * @param  \Closure  $mapper
	 * @return void
	 */
	public function mapValidatorsUsing(Closure $mapper);
}