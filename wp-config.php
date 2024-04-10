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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}A*?!90:gpe;?+M!VX=,YbCEu^,z.iV{S@^#K2UT`>9_~6v/*_7O_;1$ZV:y(-Qb' );
define( 'SECURE_AUTH_KEY',  'U~$AkNapSw[TDydX>hSRk>wWa(97HxRv],OuLzBH|-c/Ozi*WAkO#6O}^jlj &G]' );
define( 'LOGGED_IN_KEY',    'r3IcT%6tWyM!xf#r@w[=|[b>VSPL<<.tvk2>qlW@&]48{|2B32*>.]M^b3JGGU2a' );
define( 'NONCE_KEY',        ')C5Qdd1t+JrYbiY,p$Wqs/I: 2b<? 5WbXlav0lyM1rGT7;EsiHlSZ||<mY`}avU' );
define( 'AUTH_SALT',        '%k,W<<~dBgigBKdngDH#Zjla+hL/vUs=}@BE#R]6fU~We=I0J7)A*kOm4N_Af$hI' );
define( 'SECURE_AUTH_SALT', '2-BzKRnf-Z+2r@r;Q.(|}pp)>RNW@B7E>bJFiYo^X|rJ>g `KC{lK;qU.@vMFz)v' );
define( 'LOGGED_IN_SALT',   ':*^x/e lF&(kP0lKt39Paj#8:C{[imG`L^PHk4aY<uCq8Mo!y+;7Ay?kDa&a+1x*' );
define( 'NONCE_SALT',       '23AHrbEXP/wh}vhKIKwiYaEChYI!$}e%`AbyTb=dpUkOIX/=g`BDj6QK)S=Z`:>K' );

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
