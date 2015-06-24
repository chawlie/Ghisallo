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
define('DB_NAME', 'ghisallo_org_1');

/** MySQL database username */
define('DB_USER', 'ghisalloorg1');

/** MySQL database password */
define('DB_PASSWORD', 'QsYv9w?z');

/** MySQL hostname */
define('DB_HOST', 'mysql.ghisallo.org');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Force SSL for all login and user sessions. */
define('FORCE_SSL_ADMIN', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H0/NXVTNNhvjZR/gl9KfL/$gyI0Y:j5gV)(GcOi@N"la%pNj;i$^|Pn4D3Px9E"1');
define('SECURE_AUTH_KEY',  '$%/ezf:rJ71&Xb%+&0|yM!Cj@QY8kA3skVtGX#Qc&5Y@Hmz?hMQ?QiH+&)0s`m$(');
define('LOGGED_IN_KEY',    '2KG?VObnlawRxWFmkWhu`TMrOG4bAI_3sa/)R+YJ|Uh8)N%PzKOzP)mJWp_"csOp');
define('NONCE_KEY',        '&thb%&x_P#"qUxpqu/zrq0jqQb@E:btYxcR9&2ATo2`HNhlh;N_UbE@FxGzSpXo*');
define('AUTH_SALT',        'EOGKFeEbKbXQ|3v*:isV"9Jj$^dept*|N;o1V2bXQq8e"BTajaTFCMuZ/jDjS8`*');
define('SECURE_AUTH_SALT', 'i2U^Iyn+q"K~83a#f/k!whY15ktH`MV34|4*U2I6RFvJZKzh_55q~4zNudMl;9t^');
define('LOGGED_IN_SALT',   'zxwA7b1#LRyYUyg_Hif^j7_bo$`K#kb$Jh`gc(jb(@~q6cEB;SNhfdMocF#Hs^(Z');
define('NONCE_SALT',       'cU`HtMvrs5708y%dtuzM^Grt0r7IsQPc4X6?G(buU1|9/xsBk$Xp#ss3S0wOPWAv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_7bgqwa_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

