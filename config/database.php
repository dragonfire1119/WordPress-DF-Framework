<?php

// Get the wp-config.php to provide the setup for the RedBeanPHP ORM
require_once ABSPATH . "/wp-config.php";

// Setup the connection
R::setup( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '', '' . DB_USER . '', '' . DB_PASSWORD . '' );
