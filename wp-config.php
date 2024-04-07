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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );	

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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
define( 'AUTH_KEY',         '9x#<se5[g1x m FD]trrE!Zzsj^Ne}Iz/!~8B`+]?KmJewc[&iAxe03`.F4]mRFo' );
define( 'SECURE_AUTH_KEY',  '|kHVjxZj7n{)W&=~JiqUMKjui6]mH*z8:5(<r5I<gvD>UsVyT@+RpTi,>M Cl*py' );
define( 'LOGGED_IN_KEY',    'r$~bYIF$&zdxt@~xR,.)&.G1oDAmbg@_{JIY.o3WP!ofJwC}DyqD!{a:x{<=2{!/' );
define( 'NONCE_KEY',        'x)=UC$E/Qplf*ipd,sE<>U4qe{0.?s`*I]s)| /hR2A~bNQNHvt{*!or(#1}1B&J' );
define( 'AUTH_SALT',        '1)a+kc1>1i,GT$U;3n<}&)qt.qY}~5 ta2xlJ/F1C;B{xS@bZ9(vX/Ha[Q9U$V8Y' );
define( 'SECURE_AUTH_SALT', '#H@,P&A@L)x_/pA@!a*ZjC1Iva6%Znm^|g>r.!p_&LeP&G8}$&[1-=8;g{hw.5gk' );
define( 'LOGGED_IN_SALT',   'sYSy-_7qsT?v<@IB(o@lF<Q[pU56E24=l*Yx,_D5P:/:G3+@R(5,D>Fujn*)&7;u' );
define( 'NONCE_SALT',       'S?$=uTTjAVN(BkB,}F-t(0}6}MO6iW&i1PLQM&^Z@!$HU]2pfoL-V@$hG92cN _V' );

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

define( 'FS_METHOD', 'direct' );