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
define( 'DB_NAME', 'osito_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{{t 6oD;@/x~?WN|!d^UWRT_;s_:/m0qjrZlgY=0Lj]o(TF$S+f=md6zOOGa&/x[' );
define( 'SECURE_AUTH_KEY',  'dCb~-J&Kho3pSGLE}%sT`kA<Q/`1ooPU,%r{-^/vU|$:0^?_VDwq0Bn4vSf1Km?]' );
define( 'LOGGED_IN_KEY',    'sJD)vKO$ /(W: jpD+|6GM&k?2y#}gL.UZa+YN>E<b8Y5e2Z?a.gAT<K(Y9M2xcP' );
define( 'NONCE_KEY',        'svYiJZSC<ogyBXUxCp3-+>9dGEY 4(s$Nk9hc`u4?KdG2zg1j+4djAoOz<oOMF;N' );
define( 'AUTH_SALT',        '[Vymfu-Y?GFC`I@q4I#14U5na^e(V_bqgTynRgZwP10-SDj`sJzYIP{1J}ee2rV$' );
define( 'SECURE_AUTH_SALT', 'o~Zhc6T(@.phe$Q)g#1CrL[>.]U]F[tm}oa8s0=kj;EfK)Y:)+X|Ut yn1Wb-ezc' );
define( 'LOGGED_IN_SALT',   'Ge}VdMw0=$|)2jTMX W^bcyMC4nW)r.P_&m[Kss4{k(tMpi)a}Q;-}vhI{`uD[Pn' );
define( 'NONCE_SALT',       'T=v.L:N+<%#dT<C2m8%_hr<nN2YCZr?boyU#[ c&_c-PFx/~fM8`VpY{2n_,>Ym^' );

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
