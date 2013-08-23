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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'desple.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Ld:_U6;[-piT2<KIhW5.[T~GxKs7I[!/pY?m}EUZ<uV7ZskAh%aH++F-u-v^<hys');
define('SECURE_AUTH_KEY',  'K`B>ak ^i+0m^uUvHCL>[]&YcK{4WBvW0Sc+1(vyudu/(x24si|,=,;8XRem?Z+?');
define('LOGGED_IN_KEY',    '|~b-9ermR}->wCzF-~sB5VJQCLr9I+;5UXFbnVM;reO+-/OCa7; $m0;KTi&#2sr');
define('NONCE_KEY',        '9jX&whZ{#]:h.i;QIgE)3VL|D<)-~*Hx#}^k)uxMlq<7!,6sq{nmms~xCX;1YH=$');
define('AUTH_SALT',        'r}oN!O@yO<XIfyw-:#U}ql0S!`QYW30{Tm|:=pU9l&-V_9xDFZ I?FDV-1C<tP{S');
define('SECURE_AUTH_SALT', '6aJckZ@fP)!t<0#{frs??+K`Z8}S<j2rCS(h[,[t+~l$|#c+EfLHqa/.u UOxBQ-');
define('LOGGED_IN_SALT',   'N`X{b++g Z?`2K@1EVXS2tA|oyNUhhuGFU0G<Wg[h99D:&+Qm%Z~L@}Q1&SJ7mct');
define('NONCE_SALT',       ' p& i~SS1X|a^v/=[3sq@]0^HUZ_qSAoT|y+upsL!=9YK0,+]U+LCyUH44Sk7oSv');

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
