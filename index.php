<?php
/**
// Stop most of WordPress from being loaded if we just want the basics.
define( 'SHORTINIT', TRUE );
/**/

// WordPress view bootstrapper
define( 'WP_USE_THEMES', TRUE );
// Loads the WordPress Environment and Template
require( './wpbeta/wp-blog-header.php' );

if ( ! empty( $_SERVER['HTTPS'] ) && ( 'on' == $_SERVER['HTTPS'] ) ) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

header( 'Location: ' . $uri . '/wpbeta/' );
exit;
