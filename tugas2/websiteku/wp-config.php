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
define('DB_NAME', 'websiteku');

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
define('AUTH_KEY',         'R`TimTlqV9W8Z=feM<CH7a-(qbn<nyBOgx|! =ZZkS1$tjx%A-f}Q-&@c/]U<Rgp');
define('SECURE_AUTH_KEY',  '!Qc4q~`ayH2`nXtyJqT[gHjBN>KtIz ></mVQ2B|2dja>6<]&{-g2xF)*zLmH[Nu');
define('LOGGED_IN_KEY',    'b8q6r5sXY~bD^o]pcJ+2PAOCdX3nI7Cn(/F,UphG6CE3&d${ONYe)]pbm()~T>!b');
define('NONCE_KEY',        ',K9NIg[>=./H;P7}}50<J~w0l=?u8SL:3%E9`TMBv!Fa5eX6zigB}F9Spy>[AZp7');
define('AUTH_SALT',        '.+-X2kNgJUkgcswNqM&XbSn0)@8AXQnM0`$SFEJVZc7~E.Z&Wp=Z)xq0:{QVRnYT');
define('SECURE_AUTH_SALT', '~8Gr-p4?Bd]6a/ yO2+B),|DOQQ>p8T72Ei$yOgvvIh_: `thLd<`-i*ztG~_]1[');
define('LOGGED_IN_SALT',   'LHk:DMW,~2QLmE{C0FSb)yqjE~/hj1+ZGR6|/Tq]D1?!k1n{-O@92KHX@qo)n RO');
define('NONCE_SALT',       '&UH%_0mhhkpW]X)|BhrzX[Y:X-b,qS7<+kbB_q~%I7Js%f/`a,juAvS~mvL+vS9g');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
