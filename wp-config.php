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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'A<*~Q]X&.svpN6X6QN#COsmP8qYjW~j)].iBi|Px^Zq#K;4^-AODpFct@8>LSJ&(' );
define( 'SECURE_AUTH_KEY',  ' _%t0nDjyuZ?I)l,9t+b_h4x3~)wR2o9~:aoz=3&R.+#7!3jR]wrqZv,VY<Mjc6g' );
define( 'LOGGED_IN_KEY',    '@T}:SNb!Vv__qv)%UBh>ergHd*}TrTm  C@t`EYy8_N<o&+iAWQuZXeVJR`_HY&[' );
define( 'NONCE_KEY',        't@[U~n4l&r^)#`6jl22}rF[bza;(H!hK0y]<ab}Zi/_OHM,noC+VU9NN,#9769qH' );
define( 'AUTH_SALT',        'Uf#T9I7:nK=u1d$vosEAL>n4:OZ/UwA3o+s/]s2cSN|?7Z,+<xNG.s4=7&Mtm@VX' );
define( 'SECURE_AUTH_SALT', 'eDa9+W%A#R kD#}`A*o&Wjb>BFaV>@EdQbmtm-B18)6&gw7+ V$G}#ol{$b/e2,O' );
define( 'LOGGED_IN_SALT',   ',f+#ZUEPBD<GTmDnU#G8?9w+SA*8(^$TNbd<cZ}B%gL9O^$j|bwec}0,:pJp*Rm+' );
define( 'NONCE_SALT',       '~!jp4R!(hC {sy|Ia>s]CX R^hxobsABi:u&J}83FdF~):VUe1o)zze<FfMOChwS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cemor';

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
