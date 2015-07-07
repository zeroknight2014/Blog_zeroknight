<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zeroknig_sql');

/** MySQL database username */
define('DB_USER', 'zeroknig_sql');

/** MySQL database password */
define('DB_PASSWORD', 'liuzhuan');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '_?9|3<?H(f/a;5Y?}w,y0VW-Kx/j FK^;KUp(Q^6^rL}>ajT)1Z /`2L{GV~qQxv');
define('SECURE_AUTH_KEY',  'z>K6WsC/5]Hr^IFu%d*~_1tL|(@l:EdIiO3ti?*mr(<Ko@cJVu!bN$~5kN(g@Ii2');
define('LOGGED_IN_KEY',    '9J!exXI8lf/5z!GV&n~7P3vg?ZTlx0B(7,-NMJkF?M>d&L>Uvlzeiy3wZq;=|%UR');
define('NONCE_KEY',        'yuE6gKX0&/W_*@z+UP_~cz&H:lF),m)JWYPqM9C68`{zOw 8MGFej%]-?IQ7B`pu');
define('AUTH_SALT',        '37gR>@%w5,KYfK)rVt?xFsCh`d|1^mJ{ds>G|los$jD}!Iwgj$a|V@%uT*w[5bEJ');
define('SECURE_AUTH_SALT', '9%>tI0.+VT*b;Rh=s`,qQQ%C)u[6==:~|`~&Zr>wpREi%Y[<U~n3Zr.<A?Io<s_:');
define('LOGGED_IN_SALT',   '<<4X_lnr3.pX-#0v)h)=n8o)(D)|~ie_JI7N-B62p#MI1W&IK4>uVsNWqfloflIS');
define('NONCE_SALT',       'M^n#5|oZC5`5^b8PzN^I#5B_gTj[7px~BG7JR=rB:-)6_2Cjx^`cMSUl+dj%-{ud');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
