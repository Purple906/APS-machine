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
define('DB_NAME', 'advancedsolutions');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(Gc]1xo@N.UE(+<b-K1YJo$@:$GJ?>]6Q&C#xhzgK%k(y{$Gtvsj;73,/%H]X ti');
define('SECURE_AUTH_KEY',  'JeLP$pSx81T|M6[^nf]-EeCN`zxh`5rWr8WL>(FzIONa+~.dc.s/(Zc8Y/ed@)&6');
define('LOGGED_IN_KEY',    'L3&:$VI/dj%$Z/W5>bP.vMVMrk62bggmt.DJlW9bH:Q82CWZiUI9$FS*Y~`~]02U');
define('NONCE_KEY',        'ZbG:9=Sbm#)d8J:s?/HNsym}h[vhuCh i:Jde>g<x@LZ3 C:l;MVm.sJbuzb!$w<');
define('AUTH_SALT',        'LE$y|SMyEF[mvjxd#D38wG]i:Y^H>m$Bw`KO>*Z_tQlm``Lm}O`h&5Y&V-Y+~f(7');
define('SECURE_AUTH_SALT', '3+Il>$1k @k[}Dkbk.cc/dE6t?CN@!X kfhCvI91T^c&;[f>q=${fq.%4kh<=Wqo');
define('LOGGED_IN_SALT',   'mEZX^D3vjuxPABG~2Yb5;sN&3iem7aQ?1nn#7 9!n9FxV SG!BDv_>V2Jw54%(.j');
define('NONCE_SALT',       'ca4mkOL2{sTz0]%Uikj1n]o1;:HX*)mB}IY(5[)wJBKEfVJNL|Iy$)dF/~nI+)!/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
