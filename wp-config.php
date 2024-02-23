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
define( 'DB_NAME', 'clinica_del_casco' );

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
define( 'AUTH_KEY',         'IXn3|apIp.|_m^`L8(9mc_?#ei; sTruB/W9iMR(v[JSsm0O;M1Sz?X:&UvzTgmP' );
define( 'SECURE_AUTH_KEY',  '9OJ,TOTYgk{]s%J:z]E9Cb+HRNe.?q5;;fe`!o5yJc1^r=/Yk9))fiJ P,7PS`YD' );
define( 'LOGGED_IN_KEY',    'WGl!a[eneUdO>|!aUi#D<fPxazXG%{68gDbi3P|][iz>kN5F-Oag$!g%7hvhuwVl' );
define( 'NONCE_KEY',        '^;?76#AS(Nv%O.d*1hm%LvC_Q#Xgma8=QGJgkNX2B/MQzTh{6/;$er%IS7d;9!ie' );
define( 'AUTH_SALT',        '02{;NYZ+>KMh|S,&:|ypL^K`pO%]Ru5)`4[QV>/KzJ55BQsL]uhCYPABf}Wc`=A0' );
define( 'SECURE_AUTH_SALT', '=3A&V&q*:gBiTr@tP9t2mZ~5cP5f4/!%.OZQ@4OHLV 3%WaYM8z7J7MhR,G:i.w;' );
define( 'LOGGED_IN_SALT',   'vI8:Lf50@qm2=1As#`?RDLl^K)8t5]&V,N]**t^Q?G4};3|!xfVTLLfBS,yZ^fHH' );
define( 'NONCE_SALT',       'Mw2i/GE}Y%PVZ>2H 07Dtx3*0]c{$5(3kfQi%9g7,3zW=z lR=}:Y91 gVYRYJlm' );

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
