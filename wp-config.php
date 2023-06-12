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
define( 'DB_PASSWORD', 'Suyog2131' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cbtke2edzg8u.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '[t?x/sJE`SJgov<T[7kqymUO`CaV?qCF3QDkNw-8m_uQ9rkDu);>8Mpap/-2>/:J');
define('SECURE_AUTH_KEY',  'VdydefJOsazJ,Nzk_pEEI3aWgv+A:X<EHy@>*NJ|1Dyi g+J0kJ#~}Y=7-d!iu>K');
define('LOGGED_IN_KEY',    '.Bp!m@tSM5f+6|*]5XmTJSG9&_itRFzq7+i0.Mc?F*&9BT.DTq|A1g(pUz %BY~E');
define('NONCE_KEY',        '.s!fXMi-0`G7/`9gc3K3Tx?wO4zVt;+vKwieJFX-[eKB=Q+$}Sivu#D_h1yFPlsv');
define('AUTH_SALT',        '=JdRcpx;OvQM.Koc{vB;l>-kz]-NW|L|Tul$n8RkbLxU=,sNR5n.jrpyDR>Io4w3');
define('SECURE_AUTH_SALT', 'Tv#(Io1wkF@v<G^vfQDpfxDM{L)MMa6~7_+([ad:-k?}5vWzs@(zedDwq?UcWE`P');
define('LOGGED_IN_SALT',   '/FH?1Ex4n8=uvk~y<CbAEfO([b8x5}:*c{ F:0^)0@?4v@z`-+Mwy??~I&B^t;ov');
define('NONCE_SALT',       '6Ah$er9=a4Fkw#Ge|||g_{PI&ag3V+iVenz,/vv#[:6]yM`q3i3dCxKYQ~-><+V*');

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
