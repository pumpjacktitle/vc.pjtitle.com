<?php
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| Admin
	|--------------------------------------------------------------------------
	|
	| Configuration the administration of your Platform application.
	|
	*/

	'admin' => array(

		/*
		|--------------------------------------------------------------------------
		| Menu
		|--------------------------------------------------------------------------
		|
		| Here you can list the order for which the menu children will appear
		| in the admin of your application. Feel free to add any menus for
		| any extensions your application ships with!
		|
		| If a menu children doesn't exist, it'll be skipped, the
		| order however, will be preserved.
		|
		*/

		'menu' => array(

			'admin-pages',
			'admin-content',
			'admin-menus',
			'admin-tags',
			'admin-users',

		),

	),

);
