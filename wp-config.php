<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'windingRhythm');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'daniellePowell');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'windingrhythmfilms99');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+VJc<t6%Z7{+nn58+OIgxyTU0_Y-1@sLG?xQDOD.+8r=SWM@l)Uj-]<*DT]8I`JN');
define('SECURE_AUTH_KEY',  '}>Z*X8jh~b?Lb^/_eOfJ(v$?GQf%%qPW|Tw@x.#..Bx8m4[.C-`eHt3*i4k|Y`R3');
define('LOGGED_IN_KEY',    '(oc/>i-I=]Ze/$0{)QD&{iw^9!|MvI%yc-LzpEwpQ[xtu]p7.r4]wirj4D9-#dN8');
define('NONCE_KEY',        '.gQv  ;[_PK Kr:MSw1(s T_zl-w{(zV U3Ml+l[@|31E?<l$DbZO{wM2/nv%pBy');
define('AUTH_SALT',        'S&hr_:/-{i&LTK8f;#ll9qqrx?DV+Yp+%1>|CnA&W#)oiVH%j&*T]IQ@#60R+&+B');
define('SECURE_AUTH_SALT', '<2!5k,L34_2x^lb*Jh^JLgkI[3+{lJb#bco[kv]8t>ZCWC=pc(a~TIeSFJ+,~Waz');
define('LOGGED_IN_SALT',   '`o:Jcy0cks3Z74;v+}~m8ILii~~oV|a+|*2_a$y2`g~p<xvb7KiqDc)c0kTU*Mv3');
define('NONCE_SALT',       'M(4Z!,^QL?+,7pd|UD?QnX;TFI8#LF]CxjLtUc{#TW143$7mgI6n3;JC7Tc}9tI<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
