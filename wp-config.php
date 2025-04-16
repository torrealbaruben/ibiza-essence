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
define( 'DB_NAME', 'ibiza' );

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
define( 'AUTH_KEY',         '0%L_JWeHdw1_YjE12NJlk}B(50[ExtsDEED?wSO)/&j/jxQ{m0C{de^j(1pQXCL4' );
define( 'SECURE_AUTH_KEY',  '?UP>%~iR+M1c4 ,7D+{V1jGH9KUgr;he-E x@sTV]wML|t78_F69]E(SUv+qRZt+' );
define( 'LOGGED_IN_KEY',    'BhY|x:.rO9(K1=N*j~7*atelKbheyAkp9%Rz9gsP<187dS]%E7]YN@C9,:3 3Y:]' );
define( 'NONCE_KEY',        'LlSP6vw8)gYqMM2-5psIjRREz+ZXAdZ<x*^uK?sw<f8D?,o%U6el2uV_L9hifcAH' );
define( 'AUTH_SALT',        'SNX[:G1|X,<I)|XQ)ua@@)?X1~9@:Xwy3Y~T1xaK2L_jS0l_(}WZEP>5L 6_X6A<' );
define( 'SECURE_AUTH_SALT', ',b{=2dVLu0l.i!^sl_frR-rou4ZMTY N+_ER*]9+V(sNpHatgr0`^?HMcdnZPc7 ' );
define( 'LOGGED_IN_SALT',   ':Hk$({1txbAi%nHcv[8r[mk0-Og-<_huUXC]H%ZVtvr3.PRc9ytfq@L/8fg!@dh;' );
define( 'NONCE_SALT',       'p~?o!vf_;jKdv{ /R](BtnCoK:EV&M[Tbxjaa/zAuS;2a,/0?X/71w~a#i?@blAE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'webrds_wp_';

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
