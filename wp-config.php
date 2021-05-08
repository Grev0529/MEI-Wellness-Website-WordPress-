<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meiwell' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~x+;}?dlD?@SIY,mjBC!8=QYC+W=<!ti*NgA9rtTX*W#Vy3;q4Rcf9I+U3oaPAu|' );
define( 'SECURE_AUTH_KEY',  'f,[kHSt&6rjT</4<NI8/0d-:4v|IRvK@S.4AtqgZU=^m(P)N20F<[AB0#lQT|4b@' );
define( 'LOGGED_IN_KEY',    'jw,yZDjS9.ae>=@cxreVg2K.2Gg5`yLiE{k?%XeaF;K?Q$UjjO:LvXvcUX+ky<5r' );
define( 'NONCE_KEY',        'UH-4mNHO%I3tB-Y/6@cWO]6}se1#EM(J,Ec!te$_kg!mLlMF#/~s}hR~?wB^:wL<' );
define( 'AUTH_SALT',        'g#.l)M_:L(PgGUp$e?Jwpe,:RMU{Xu2w(,-h-9A=R%If7e]ofDvh?&>Z]^iuQ80&' );
define( 'SECURE_AUTH_SALT', '4f@;s97f9_<fY.S>boLZE)n>S/)$&~_0=diS^W)v n[8*K>3%?;iAo/qo+vhBl.e' );
define( 'LOGGED_IN_SALT',   ';gW Vy2V,:pCQFrca baId|$td/;bY[j_a.R_y_d%-=yh*s@-CeTOD@H66}*Q3w+' );
define( 'NONCE_SALT',       'm}?.gXfnlMoq(w6.!{iCdQ*CRj$NHpyn5b74/VFzIj<kVj&LlYo6K0$p0G8$4jn%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'well';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
