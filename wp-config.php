<?php
//*
// For Debug purpose
@ini_set( 'log_errors', 'On' );
@ini_set( 'display_errors', 'On' );
@ini_set( 'error_log', 'http://' . $_SERVER['HTTP_HOST'] . '/logs/php_errors.' . date( 'Y-m-d' ) . '.log' );

define( 'WP_DEBUG', TRUE );
define( 'WP_DEBUG_DISPLAY', TRUE ); 
define( 'WP_DEBUG_LOG', '/logs' );
// Debug JS, When this is defined and set to TRUE the non-minified versions of the Javascripts will be used.
define( 'SCRIPT_DEBUG', TRUE );
/**/

/*
// for deactivate login/logout
function wp_validate_auth_cookie($cookie = '', $scheme = '' ) {
	
	return 1;
}
/**/

/*
// Proxy Settings
define( 'WP_PROXY_HOST', '10.28.123.4' );
define( 'WP_PROXY_PORT', '8080' );
define( 'WP_PROXY_USERNAME', 'username123' );
define( 'WP_PROXY_PASSWORD', 'password123' );
define( 'WP_PROXY_BYPASS_HOSTS', 'localhost' );
/**/

/*
// FTP Data
//define( 'FTP_HOST', '' );
//define( 'FTP_USER', 'username123' );
//define( 'FTP_PASS', 'password123' );
/**/

//*
// MySQL settings
define( 'DB_NAME', 'wpbeta' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
/**/

//*
// Custom content directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
// Custom plugin directory
define( 'WP_PLUGIN_DIR', dirname( __FILE__ ) . '/wp-plugins' );
define( 'WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-plugins' );
// Custom mu plugin directory
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/wpmu-plugins' );
define( 'WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wpmu-plugins' );
/**/

// Set memory limit
define( 'WP_MEMORY_LIMIT', '128M' );

// Save queries for read and optimize
define( 'SAVEQUERIES', TRUE );

// Set revisions
define( 'WP_POST_REVISIONS', 3 );

// Compression for JS and styles
define( 'CONCATENATE_SCRIPTS', FALSE ); // activate concantenate scripts 
define( 'COMPRESS_SCRIPTS', FALSE ); // activate JS compression

// Allow Multisite
define( 'WP_ALLOW_MULTISITE', TRUE );

//*
// Network setup
define( 'MULTISITE',            TRUE );
define( 'SUBDOMAIN_INSTALL',    FALSE );
$base = '/wpbeta/';
define( 'DOMAIN_CURRENT_SITE',  'localhost' );
define( 'PATH_CURRENT_SITE',    '/wpbeta/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/**/

// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Table prefix
// Change this if you have multiple installs in the same database
$table_prefix  = 'wpbeta_';

// Language
// Leave blank for American English
define ( 'WPLANG', '' );

// Bootstrap WordPress
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wpbeta' );

require_once( ABSPATH . 'wp-settings.php' );
