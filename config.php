<?php
if(true) {
    error_reporting(-1);
    ini_set('display_errors', true);
}

DEFINE('API_URL', 'http://heliosapi.homes.com/v1/');
DEFINE('API_KEY', '0000000000000000000000000000000');

// Set default timezone
date_default_timezone_set('America/New_York');
putenv('TZ=US/Eastern');

// Class autoloader
function __autoload( $className ) {
    foreach( array('tools', 'controllers') as $folder ) {
        $class = dirname(__FILE__) .'/'. $folder .'/'. $className .'.php';
        if( file_exists($class) ) {
            require_once($class);
            return;
        }
    }

    throw new Exception('Cannot find '. $className .'.php in library folder.', E_USER_ERROR);
}