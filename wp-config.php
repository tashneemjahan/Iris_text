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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`lS%`oP4,AmmDM*/*nS@5zqe!#:9Hr=seyi/(uy/s9&#.&DBeIV1m+%B;,Z.RAxI');
define('SECURE_AUTH_KEY',  '6K(Xl75d`{I FllL,nFzUruI{U-KxxR[OO7Q*~&Bg_E+K#ES[BE>`sj`^:NmU9*i');
define('LOGGED_IN_KEY',    'oR?VXDXAP8v_!Wfl}T9w1zGd;B`7D9:hwC/QV9u4evfd[)W,4O|rX(Y&L}e!$k_@');
define('NONCE_KEY',        'hgBcaC!3V3C@PyRxA@{g3S7*se!bv!:cvT+T%a-@$DA0qC[D9IuaStZh+]K5BHq|');
define('AUTH_SALT',        'MT?5j{Xo|P7wAfgp98(:N16]L Y$hkHImAa,&[;vv8o8W%8E/S23^V.>S,k#au?#');
define('SECURE_AUTH_SALT', '5P`2XTR6r/@ 1I<T >7eP6~%qS&*zc^6SJpoZ*o,izsrNJiI16wwfU4|r=lei|NI');
define('LOGGED_IN_SALT',   '}+l1an(Cyl~7([vbS1-Tysgp@n1JIOBFhnH(gPFGqXUmD!W}9^RvAqAtPLw2sQ%i');
define('NONCE_SALT',       'DOSO_*[Ex~AiB>.)?|,QgI:+6frGdc{mh^uvao}C>0YvfX{D?fN>8Mdnj1P P@W%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');