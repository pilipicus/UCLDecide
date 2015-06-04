<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'UCL_decide_website_responsive');

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
define('AUTH_KEY',         'X6b@&E >BG!r8ds861~eV]~c(-aHqLQ!Q|vtioO9~gC[y<zv=c=RJiwds}ld-6A7');
define('SECURE_AUTH_KEY',  '3sLSeVVGQ^M1gm}]A)4L+AT[h<|4[C4:U5-T6|:~f< *]MtW5vkI+-itM8%N-awo');
define('LOGGED_IN_KEY',    '#2:jxv7?+fBTN#*;|~|f9Y5uRpq<c+k+naCHJ%P/m~zk+s(vi#+nL+4HkYMbbmuj');
define('NONCE_KEY',        'SNzMkAyN7ks>+ZS|4-}6Q%J)o>2@G*lm6_w/j`mE4{aE&w  uyIdg[/at+X?BM{m');
define('AUTH_SALT',        '[H5_I?T!)a%FT4_e-7RlzEr5,]<~q{xi3:B5jCks{#G05Y$l-P<Yk|A@z#Fa+IT|');
define('SECURE_AUTH_SALT', 'F<-G|i:B#j)25@,zr/;`6)IM9En7UC!UDbA;.c=> !neiyj=Pn^KZkRAW1,-}vI7');
define('LOGGED_IN_SALT',   'G*?+>wt/}opW)$x>E*N8)l$Ljd+ L<<PtwPu.2;/E(`DC(&G#]5-7aw,}$|w?-zG');
define('NONCE_SALT',       '<GlnXH|1)cqdJz]a#:ix+S<bv+e5?M6-?<>VAmqGfi-)&OS%cGk7tLQ?1<f[Z2T*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
