<?php
/*
Plugin Name: Your Plugin Name
Plugin URI: http://www.your-plugin.com
Description: Your well written plugin description.
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

// Load the framework tick tock tick... Loaded
$plugin_path = dirname(__FILE__).'/';
if(class_exists('DFPluginFramework') != true)
    require_once($plugin_path.'framework/DF.php');

// Load some librarys
require_once($plugin_path.'framework/pagination.php');
require_once($plugin_path.'framework/rb.php');

// Get the wp-config.php to provide the setup for the RedBeanPHP ORM
require_once (ABSPATH . "/wp-config.php");

// This integrates the RedBeanPHP ORM 3.2.3 http://redbeanphp.com/
R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '', '' . DB_USER . '', '' . DB_PASSWORD . '');