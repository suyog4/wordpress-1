<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'suyog2131' );

/** Database hostname */
define( 'DB_HOST', 'admin.cbtke2edzg8u.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i.k RUm1XI2t<h?~H6+.1^j|ph$.Whv$bI2l|`kCfEzBr(Vwu),lSSXYFw-3lG(.');
define('SECURE_AUTH_KEY',  '%5[*(>}XhYM#d}5*1Nx|Lo2bfI,HW>P,nh@OW[-j&|84RVWD[lO}$#l+/:6n%2$!');
define('LOGGED_IN_KEY',    '=-J|ktX)xT|B5c}w&2mC]tWOwZKO(t6]6U(hFOXN&&]6gr01s}C]v5L+` )g~(Fv');
define('NONCE_KEY',        'a~W6P<&Mv#R=A/&zl}%0RKe/B2-F`j_CU>qNn|xH~-ca;|9r9t)u$^eh!^ZGvJat');
define('AUTH_SALT',        'UU)r,{vl:r;Q|50QoU8fL:9aIW.{}^Y&]w8[)>a|cN,sG<AT37QH@zW4|$)_Pu|y');
define('SECURE_AUTH_SALT', ')#|CV+h!tl *}+(GO[m]N[$}T[f.lG4x+%)m%`GbI~*K6|DJtKZgCy6$arexpjO|');
define('LOGGED_IN_SALT',   'utPV`GdLUHQq^Hec5TF)|s;+lRtcs]I0:sj{+x_~X}tkxdAQJ1HTCx4qEH~p7-&p');
define('NONCE_SALT',       'C%JGU2a&@6t>_-Uej% jxFZWB%|By|V|c2)J)03;d$N>R?Tmyilr%j!t,E_4peCg');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
