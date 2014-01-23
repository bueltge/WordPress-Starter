<?php
// For Debug purpose add the url param: ?wp_debug=true
if ( isset($_GET['wp_debug']) && $_GET['wp_debug'] === 'true')
	define( 'WP_DEBUG', TRUE );
else
	define( 'WP_DEBUG', FALSE );

if ( WP_DEBUG ) {
	define( 'WP_DEBUG_LOG', TRUE ); // leave the debug file in WP_CONTENT_DIR . '/debug.log'
	define( 'WP_DEBUG_DISPLAY', TRUE );
	
	// Debug JS
	// When this is defined and set to TRUE the non-minified versions of the Javascripts will be used.
	define( 'SCRIPT_DEBUG', TRUE );
	
	@ini_set( 'log_errors', 'On' );
	@ini_set( 'display_errors', 'On' );
	@ini_set( 'error_log', $_SERVER['DOCUMENT_ROOT'] . '/logs/php_errors.log' );
}

/*
// for deactivate login/logout
function wp_validate_auth_cookie( $cookie = '', $scheme = '' ) {
	
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
define( 'FTP_HOST', '' );
define( 'FTP_USER', 'username123' );
define( 'FTP_PASS', 'password123' );
define( 'FTP_SSL', FALSE );
/**/

/* FTP Method
define( 'FS_METHOD', 'direct' );
/**/

//*
// MySQL settings
define( 'DB_NAME',     'wpbeta' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  '' );
/**/

/**
 * WordPress and Site Adress
 * The WordPress- and the Site-Adress are automatically adopted 
 *    uring the installation process of WordPress and may be changed in 
 *    the administrator panel after the installation is completed.
 * @see http://marketpress.com/2013/wordpress-and-site-adress-explained/
 */
/*
// Home URL of your WordPress.
define( 'WP_SITEURL', 'http://localhost/wpbeta' );
// URL to the WordPress root dir.
define( 'WP_HOME', 'http://localhost/wpbeta' );
/**/

//*
// Custom content directory
define( 'WP_CONTENT_DIR',  dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL',  'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
// Custom plugin directory
define( 'WP_PLUGIN_DIR',   dirname( __FILE__ ) . '/wp-plugins' );
define( 'WP_PLUGIN_URL',   'http://' . $_SERVER['HTTP_HOST'] . '/wp-plugins' );
// Custom mu plugin directory
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/wpmu-plugins' );
define( 'WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wpmu-plugins' );
/**/

// Set memory limit
define( 'WP_MEMORY_LIMIT', '128M' );
if (
	function_exists('memory_get_usage') &&
	( (int) @ini_get('memory_limit') < abs( (int) WP_MEMORY_LIMIT ) )
	)
	@ini_set( 'memory_limit', WP_MEMORY_LIMIT );

// Save queries for read and optimize
define( 'SAVEQUERIES', TRUE );

// Skip wp-content when upgrading to a new WordPress version.
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', TRUE );

// Set revisions
define( 'WP_POST_REVISIONS', 3 );

// Compression for JS and styles
define( 'CONCATENATE_SCRIPTS', FALSE ); // activate concantenate scripts 
define( 'COMPRESS_SCRIPTS',    FALSE ); // activate JS compression

/*
// for enabling/disabling theme/plugin editor
define( 'DISALLOW_FILE_EDIT', TRUE );
/**/

/*
// Disallow anything that creates, deletes, or edits core, plugin, or theme files.
// Files in uploads are excepted.
define( 'DISALLOW_FILE_MODS', TRUE );
/**/

/*
// Disallow unfiltered_html for all users, even admins and super admins
define( 'DISALLOW_UNFILTERED_HTML', TRUE );
/**/

/*
// Allow uploads of filtered file types to users with administrator role
define( 'ALLOW_UNFILTERED_UPLOADS', TRUE );
/**/

/*
// This will disable WordPress internal cron job. Maybe you will replace with
//     a Hoster cron to reduce the load
define( DISABLE_WP_CRON', TRUE );
/**/

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

//*
// One cookie for all sites in network, easy to logged in in each site
define( 'ADMIN_COOKIE_PATH', '/' );
define( 'COOKIE_DOMAIN', '' );
define( 'COOKIEPATH', '' );
define( 'SITECOOKIEPATH', '' );
/**/

/*
// Important for use Multisite Without a Domain Mapping Plugin
define( 'COOKIE_DOMAIN', FALSE );
/**/

// Table prefix
// Change this if you have multiple installs in the same database
$table_prefix  = 'wpbeta_';

// Language
// Leave blank for American English
define ( 'WPLANG', '' );

// Bootstrap WordPress
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wpbeta/' );

require_once( ABSPATH . 'wp-settings.php' );
