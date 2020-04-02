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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bootcamp0203unicorn' );

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
define( 'AUTH_KEY',         'Z35X)mL|ig&^[!xNLLS(Sv]4:,LV5#gdkMk66|;*hc1*$2||Uw.PS52d-uuA0i^4' );
define( 'SECURE_AUTH_KEY',  'oU]-mw2$<xdHH_JU3%KyUnZJtsX(Xs9Z4=hWg<d<Z#Aj5zcgow(F2fvHrg2Yas*d' );
define( 'LOGGED_IN_KEY',    'GV7=/9}RtTDX=oIFy8:}PPFW/GU!ohlJt<<Oz/kkKVPC()C2Q>6i7J#]tQb.AS`A' );
define( 'NONCE_KEY',        'AuH|b}wrLpset[h]hreLX2Yb=8v}8g1RBzw%)X={f}&hU*IA}.P;[wPh7ya<Iiuq' );
define( 'AUTH_SALT',        'f.OKME1CoPvmsm;|4g*>DgxF#$//f)2veOnUj85;g2RPH~a H[s10U*7TGxq6C &' );
define( 'SECURE_AUTH_SALT', 'h:/UXw!Gwh/>nM`yDo@./$P;CH=[CH]bl&n,w1JPA`t(z-;@uu>*XwbYQkng8!4D' );
define( 'LOGGED_IN_SALT',   'C27m|VXrRE^7&n:t1n^)s^QCM^vN^.bvt?c/Dr7_Y6Kzn^gy:%N*MI636stDXV_C' );
define( 'NONCE_SALT',       '&9as9)HHjw~on/{04fW-$VI`WO}n$ua*2312Zo$Njq9Q1#Tvvt5.{ 04oA?5Vd@J' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
