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
define('DB_NAME', 'yentanews');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(@#YQnE;I^n3|`zsU(PSyPZ%$o`]q4rlW M7lQ.s,iIqFy24<treus4~Q_Gi~&IC');
define('SECURE_AUTH_KEY',  '0-dUUo.@IS@I)mrKhpF81H_nNK!N&s[Yi7Dh~X~p|D;h>i3L3u+-}$#me^gHz?.S');
define('LOGGED_IN_KEY',    '.chNi E:boN+Ur0#u]u o),i`guCSk@n DHY[en`8H(PzP }5;du</_tX$uKX3B~');
define('NONCE_KEY',        's,AU;0|]@syYfe9xY6+b $gKhGU1;9}5#4n3BHy@r|A-l$N] e!aKi?wh4u1<>NV');
define('AUTH_SALT',        '&*/[Y=O/xol3L14^2u^<dz`@+%xjf-sNBO1!/+2Ooelg^SP!-2Z9IF6F!z~Sn|JC');
define('SECURE_AUTH_SALT', 'UD9fO:YJXBE(0a#CTHL]{N5rJFs* L5DR2-3klma*FiPc^TSN$EPsw{6,PM;oT*@');
define('LOGGED_IN_SALT',   'U6%14U^?goJ_I<_%SR)S%2{>4Vz{<;oyM5en*ZiHae5=).1AY`7?wXgE| -JkR%_');
define('NONCE_SALT',       'q1:(Z92h KGb%&9tlJ(u2-qadvO={E*yV=[?0@=0J0&L;1$6FbV4l+n+Ep%j0QEH');

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
