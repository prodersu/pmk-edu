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
define( 'DB_NAME', 'PMK_EDU' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Jk]t7&I4WEuQ=WDHu-r[z uST10!nC{bi:5rVPpVX`{}:$sX^bp T:J)h^QdS L#' );
define( 'SECURE_AUTH_KEY',  'JT!Q`jN J4^;K2Ifg#gD!#w@pF?*w!)7J~?v{&w7@m&~(HSY:hZ`&l;STJM$dXqd' );
define( 'LOGGED_IN_KEY',    'i[<P!0.H-SKDb W08k%pAf2#ZeW)Z?wU.N?`rAs&Ki?u{@9^=~<Qc0_*ZiO:tvNB' );
define( 'NONCE_KEY',        ':aER|1MNx1!cR*r`!.N.(25uzNbSX05FX#Han1/)F&w*k-r9/Ndo@l+PvEIKn6&D' );
define( 'AUTH_SALT',        'r:=9ETcGUVszB,U-x[X|S::9{@Q;*.CAH&ItV2!Ba$D/J#DIB/_X>(xR7yhU7Qeo' );
define( 'SECURE_AUTH_SALT', 'd(PR4/=B?):m6~IoaAR~k. ,@Zf%&;T)wSB|^X:7]<xgu.|+@0WVqoXa?tI^[v n' );
define( 'LOGGED_IN_SALT',   '&:->eeI1?M*x[SOpjsIGXwK~~),UkYklQYzq4;j^WA?:~+X-%`g~cY-^&Z191|wb' );
define( 'NONCE_SALT',       'ZS&Wtrb>uIPjxVx&k<vh;M~24#1b4uGLHoU4J@DF>C{{f{bxTm#}57`uQnI-qoLz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pmk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
