<?php
/**
* Part of the LinxFix bundle for Laravel.
*
* NOTICE OF LICENSE
*
* Licensed under the 3-clause BSD License.
*
* This source file is subject to the 3-clause BSD License that is
* bundled with this package in the LICENSE file. It is also available at
* the following URL: http://www.opensource.org/licenses/BSD-3-Clause
*
* @package LinxFix
* @version 1.0
* @author Squegg Ltd
* @license BSD License (3-clause)
* @copyright (c) 2012 - 2013, Squegg Ltd
* @link http://www.squegg.com
*/


namespace LinxFix;

use Redirect;
use Response;
use Str;
use URI;
use Event;
use Config;

/**
 * LinxFix class
 *
 * @author Ben James
 */

class LinxFix
{

		/**
		 * Create new LinxFix instance
		 *
		 * @return 404 or redirect
		 */

		 public static function correct()
		 {
			 	//Cycle through the config

			 	foreach (Config::get('LinxFix::links') as $link) {
			 		
				 		// Check if the current URL is in the list and set return its redirect value

				 		if( $link['from'] == URI::current() )
				 		{
				 				return Redirect::to( $link['to'] , $link['status'] );
				 		}
			 	}

			 	// If not redirected, run usual 404.

			 	return Response::error('404');
			 	
		 } 


}