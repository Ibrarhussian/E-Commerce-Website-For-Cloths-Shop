<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'llc' );

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
define( 'AUTH_KEY',         'FR>SQ}GGg|f[L5xG(#v@_)H@`CLL`+WnB4C-nPzZ{V0|~G$T=F]^{;Sr5gB6E2Sc' );
define( 'SECURE_AUTH_KEY',  'Mnp8-D<7[r(nyca6:FZjk^hB,5.o&Attk3qS>=*$Qc}DP8eE$iaqGjX|%f:W03z2' );
define( 'LOGGED_IN_KEY',    '[S(R@]F9?8X@,My?7}TYh?egIq+atx~>@i,P1?6d,] U0e-q(|4),.%$(RXwAAoP' );
define( 'NONCE_KEY',        '2rs@1@6$~-blZa?:Mpq4lErBvu<3F(R6V24h&2mxSQXm ;t{7!J+rA_sDM^jp=P,' );
define( 'AUTH_SALT',        'h[X5rh5<F!x/:)w<XZNcTK0$[LqgQ/r4!q=pO*WO*nAs{*!.F)z]%{!(p%JU.0 .' );
define( 'SECURE_AUTH_SALT', '1%oLn)8?k?.m/K[ :C>0Fxw=uSa,J><37L:8itm;gjq1O&ixLu2}t`_ pr8_H%OJ' );
define( 'LOGGED_IN_SALT',   '#p%,_Uc#ZnC?=*1.Ust9_HdfTqe{fm u}V?l#0n{ lO0K]`ttq)|G&ZIf1._ErI9' );
define( 'NONCE_SALT',       'T[_z[0WWMdIa$mZ.w*}9W!lf#:VSTZXDE]xhsH%Q|0I_7M0g^DtHN?^Sqp|m$KUR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
