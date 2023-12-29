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
define( 'DB_NAME', 'carrental' );

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
define( 'AUTH_KEY',         '+._IF=oX(5:GatZ_9hV4h w4+o*R]Efpc7b6^nwwiGYii_v5kH/e/oO)T1s[e$>/' );
define( 'SECURE_AUTH_KEY',  ']=[Jan&^?3,w&g86 LZ.YwfO0Hi7ovK7QU-z>`tcD.(]?N2;RfDl{S-TX&|x.G3X' );
define( 'LOGGED_IN_KEY',    'Tt>|.KZv@[T4HE5oL63XvIJ[b14JO4Jz*3GMtVeqPxDPM5oB!=3?Bv#jEhqNJznH' );
define( 'NONCE_KEY',        'Hig_Wk!yi#2i~;5&Kv:lAs/sNEF}v+!wuYalNA61HM,^ANpiZ*-%Dyg$]/oyQECG' );
define( 'AUTH_SALT',        '/8Z2 G%`>Li1O;9:GL.Xc4jZgDT3$NnY*q0yZiPvG,HQ?nqjxU3S1I?^p4;uCl=_' );
define( 'SECURE_AUTH_SALT', 'fP/X,`x&,Tqx>?4A  vlsQfFVLaB6Cgb_0eHM?dk>e%LfwH.>Uyq^b2$Tz-ff{-E' );
define( 'LOGGED_IN_SALT',   'cY:O&?s+z~an0]uGhBuX/swFB!WsnVpbD{2wFX R4yP+(Qn1Z@-QZ5={^:@3gJ=g' );
define( 'NONCE_SALT',       'Q6Ilpb0Yj$yXyL;_gxGa 6.Yz}D? 7Mn|oG.f0`lTlJT>WEJ.QkeC[tfM3nv3K%U' );

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
