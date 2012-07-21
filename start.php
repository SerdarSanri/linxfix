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


// Autoload classes
Autoloader::namespaces(array(
'LinxFix' => Bundle::path('linxfix'),
));

// Set the global alias
Autoloader::alias('LinxFix\\LinxFix', 'LinxFix');


Event::override('404', function(){
    //return Response::error('404');
    return LinxFix::correct();
});