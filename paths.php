<?php

$route = array();

$route['plugin_name'] = "bbframe";
$route['plugin_dir'] = WP_PLUGIN_DIR.'/'.basename( dirname( $here ) );

$route['config_dir'] = $route['plugin_dir'].$route['plugin_name'].'/config/';
$route['controllers_dir'] = $route['plugin_dir'].$route['plugin_name'].'/controllers/';
$route['lang_dir'] = $route['plugin_dir'].$route['plugin_name'].'/language/';
$route['lib_dir'] = $route['plugin_dir'].$route['plugin_name'].'/libraries/';
$route['models_dir'] = $route['plugin_dir'].$route['plugin_name'].'/models/';
$route['public_dir'] = WP_PLUGIN_URL.'/'.$route['plugin_name'].'/public';
$route['views_dir'] = $route['plugin_dir'].$route['plugin_name'].'/views/';

$route['css_dir'] = $route['public_dir'].'/css/';
$route['js_dir'] = $route['public_dir'].'/js/';
