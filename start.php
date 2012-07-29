<?php

/*
Plugin Name: Your Plugin Name
Plugin URI: http://www.your-plugin.com
Description: Your well written plugin description...
Author: Your Name
Version: 1.0
Author URI: http://www.your-github-account.com/
*/

/*
    Copyright Your Name/Company, 2012
    My plugins are created for WordPress, an open source software
    released under the GNU public license
    <http://www.gnu.org/licenses/gpl.html>. Therefore any part of
    my plugins which constitute a derivitive work of WordPress are also
    licensed under the GPL 3.0. My plugins are comprised of several
    different file types, including: php, cascading style sheets,
    javascript, as well as several image types including GIF, JPEG, and
    PNG. All PHP and JS files are released under the GPL 3.0 unless
    specified otherwised within the file itself. If specified as
    otherwise the files are licesned or dual licensed (as stated in
    the file) under the MIT <http://www.opensource.org/licenses/mit-license.php>,
    a compatible GPL license.
 */

// --------------------------------------------------------------
// Tick... Tock... Tick... Tock...
// --------------------------------------------------------------
define( 'DF_START', microtime( true ) );

// routes
require_once 'paths.php';

// libraries
require_once $route['lib_dir'].'pagination.php';
require_once $route['lib_dir'].'rb.php';

// config
require_once $route['config_dir'].'application.php';
require_once $route['config_dir'].'database.php';

// models
require_once $route['models_dir'].'sample.php';

// controllers
require_once $route['controllers_dir'].'sample.php';

// WordPress Actions... ETC...
if ( is_admin() ) {
    
} else {
    
}
