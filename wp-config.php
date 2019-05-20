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
define( 'DB_NAME', 'pescePage_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!XMcrV{/]Gf~gbLw=T;|KY XU0</`_(]r?(U:}*Y(/]m`QUwWy`;I_6d&[cPO [,' );
define( 'SECURE_AUTH_KEY',  '2QVCK[`BE86m0#}`;BpE{HMPiQKu11h$HHH@h+rt-Cc/D[j@Yc,ayFB0IIXr@$Bt' );
define( 'LOGGED_IN_KEY',    'uj@N<gbqt-XfvuXnO@-jBnUo+*sy5 kZi{)XwTW8/Mb7jG<DNBt)6. .W%gFic:W' );
define( 'NONCE_KEY',        '`39P*y&YNVg|?cG(okfdbbp%5Nq&rf`Vxhhe*H&xHsh^AUHs$%h-/9e5fh4}K?Kt' );
define( 'AUTH_SALT',        '.hSfVOG%lPs4Ou~(7N0`4;9kU[npcx`UCxvipsB0juZ.vj8hg3,5BZJ <j0eD[X5' );
define( 'SECURE_AUTH_SALT', 'n>S>a$AD(4;cP =T_y?wi[zE 43sS>~&i9fQ}VI$qp.XkcbB8197eSqbfh`,w!mo' );
define( 'LOGGED_IN_SALT',   '/C?6~*JNYHx,o`4&hcEG TOv!d.:AkDHZT/:TSw>vf2Whezm{|y_z(8|KUP1<Q`]' );
define( 'NONCE_SALT',       '{29UdF</geU56=x+L9w0Kw1#U0cR{H&WG}?]VrE E*Y`][C5f@5!Gu};G0~;V%N[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pesce_';

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
