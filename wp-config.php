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
define( 'DB_NAME', 'woonuxt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'mM<uYB&,QRbM[v&bj4Og^|sBEkrQX98S>lWI}:4^<4p0_ngNR>i@:l~-u6$53*q@' );
define( 'SECURE_AUTH_KEY',  '*pcO[1Iuz29EMUdft)|~vDuCeI^[] 2,ePV=!)`6ccm.!Dw}9eR1w{y7VqAHu9fn' );
define( 'LOGGED_IN_KEY',    '<rl&Y>A;Oi2VTJK`mdD<ILds$28N9v.t@z86>hnwoU1X09ikk@zOz^.Ll4woZ]S}' );
define( 'NONCE_KEY',        'I)C|XW(^bosHzq`G@(9;-O2gYzxRP=QA]Z3+qM>oR{j9d.TYXvMA me#|c S>H~L' );
define( 'AUTH_SALT',        'EAM|IpD2w,V:$VT(g}h+>d~7pqGNbnUkP=WE5%2^pF.uz{HAq%|t&<94aE<Cu3xl' );
define( 'SECURE_AUTH_SALT', 'm%ry9n.j/HWF,G,uK^LgTaq6?Ec2(vOvuiiPpa(hHZ{J!X4WMcT`OfNY1m;HE4EG' );
define( 'LOGGED_IN_SALT',   'W6c ad+6O?3t{Z37]C~fcdgL6EnaPYmELc2n>xMvkd:{]oTVdO&!Ofu&H<PnbP{.' );
define( 'NONCE_SALT',       '_l.GH,|g5w_McL2cPlB;V/#KaG+igG;@pppf!@&hbN,z;HtFZB7KSGO4Cec 0y~?' );

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
