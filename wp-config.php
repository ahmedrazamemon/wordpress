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
define( 'DB_NAME', 'portfol' );

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
define( 'AUTH_KEY',         'L*~gL86)P/~BHhlj%#Ab$-=<YM[[9oG*cbdAL=UB`OL-]@bEpX/Dx<uyh.T/w!6Z' );
define( 'SECURE_AUTH_KEY',  ';g3&sI@f242*qCe0oCw3_wtO{,&dt,(U+? mxNGsnY6!Uj9Oq)1vc?8e}_@ZL?-c' );
define( 'LOGGED_IN_KEY',    'k0t ,_SQOkeh8$o }-k,*+@|hJL.Yr7?Kk:tqq0}g[EW*7-r%?ObjG7d5t}P[r-m' );
define( 'NONCE_KEY',        'm]C{gViERXN0?6>=Rouqc-`pN+5knVb,M(JYzVL}&j>h7r>RXK=EX&8GK-r,3aA.' );
define( 'AUTH_SALT',        'y-=`*p,hi{%`uk^-fAm[{W7Z:IS2`%)Hy[9GM;VJZtn%cKb2xQ%>pPZB,rQE~>#,' );
define( 'SECURE_AUTH_SALT', 'fEuNkcSQ!/*]uFgdC[-rpiCW2:q{/V1V{s4ubGB>^N-_~A(2Jp1aID]{/CMeETMb' );
define( 'LOGGED_IN_SALT',   'Pz?GF$k7rCASaZqwlxcx7>O%{0/UzKln5_KGA.wCy vavskL=YR;Oe?e]tnx;k/`' );
define( 'NONCE_SALT',       'aH$/_$733@vU{LIzL!QYiRFv?9:Gw8CuB2{{G8-I+h[l4988*B#DxzzshO3y^(6j' );

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
