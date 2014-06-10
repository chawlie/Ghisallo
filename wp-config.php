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
define('DB_NAME', 'ghisallowp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Px!&0hM,g|THeOZnUF5prE#gl?Pm1<AESTdItYKnoG5z&UQ;6foMvW2(|,5=#~IY');
define('SECURE_AUTH_KEY',  'j,=z-ViCT}U6;;hJ48_:.yxtQ+N{# dH>(_i`.$veo!k)OTO6}$h8? JphOHDNOi');
define('LOGGED_IN_KEY',    'ok+nSCdB`^p)37zqA|NZO=AE4v#@wK7u$UZ3LnC_yT2}WOm&XHupD.<Y> QSWWx3');
define('NONCE_KEY',        '@V*:L=-o(k*!qv1aY!:BIcT{gdCX2f+&GyJ:V(vW#[*2=Y!vI?G9:hsu]|lq~A|s');
define('AUTH_SALT',        ']C(J<+3$,sC|||{|?5bcQN`Hf<x/k/)CTm}@gsbYxoqH5YrP.cCs@p0|C3oKwaK3');
define('SECURE_AUTH_SALT', 'n_8-Bgty}vE_Bm kh`0ryO>!bI+WrE(#=2qVW&&);yJKNwm}O?-BcN&3]odNWY4@');
define('LOGGED_IN_SALT',   '^K1dHN>L^yUs]Gey@nK z[pPNgMPz@R@zll ?ph]lFAZ!BCM/CG^C[sZzx%ap)*E');
define('NONCE_SALT',       'ZN_~c@-xH<6[z]f+}g1 `5U<{G=7@z}{YH#bsUw9w~{(o0~4)D[s0,ato9||3T ,');

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
