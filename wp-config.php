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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8|C%yWh0^Xqfw*Q[xFh<z%p&q8kmwK*FC^Z<S$Y*]SR@{H!P4+?E83XHAp !1HG)' );
define( 'SECURE_AUTH_KEY',  'Do_E>^}orDCI74u62OeklPn]vF`6vfUMG<qGyk;3XO{5x1z^ K$pYw3CO+[]KCpN' );
define( 'LOGGED_IN_KEY',    'p4[0}/&!uZo9f$J83^lV3^g/cJw#888BQg9OH#y#ErRSVx 8kH_.WhdEqx^.}z3#' );
define( 'NONCE_KEY',        'Z2b!94u4%(-)y_CDG[M;#kd4i)}7?*;B9 AfR3tU#Nr_.TgSrWFX%<y`(V`cO{PA' );
define( 'AUTH_SALT',        'X0ZSBdQ&ZWNWpgc@OAO<zBI/jsfL-*! k)!`(#+->)m2JyIMX#i8z<J8Lu^bB:sb' );
define( 'SECURE_AUTH_SALT', 'Mv2>OAseKW,g5LWR/41O`6PC8h$YX|E3=0%hz*Q=FR3L9xq8/g;;k3)=qIq:Yz,T' );
define( 'LOGGED_IN_SALT',   'rjW=}[M>F=/.inDdh(]Zx 8?}`,XA}H3lauX:VzmO7VR7cX,_p(#t*=`~:K9O-3x' );
define( 'NONCE_SALT',       '-uD{pK2`W!-z|>Rji,.L[I3YM%Jn6k`Py072Z1}<UM1;HLia47K/Rbwqh.D:Rj`+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
