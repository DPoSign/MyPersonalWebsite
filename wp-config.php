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
define('AUTH_KEY',         '(a9Qr!*B+cXsppJlH4E[~v]c0u?i9y0<q~!fN_pkSomHsn[SJ> qE32IHm4*fv=d');
define('SECURE_AUTH_KEY',  's61Gm2i@I4k<d#|e_*MrKvIXK(m+^jD @f0=EYub%/mD0l-X[zdC},}_Cy=v0*s3');
define('LOGGED_IN_KEY',    'w0RpFr&w/sjS@O1QG[fcFi3H ,@HytIv6Pf Bo:$z6mSY;oHmr!>1J.!V=yX;{On');
define('NONCE_KEY',        '([!:jHH0#)=JMfE^;F0b0>%rxKadd^ E;aN&fO]dI?{;lY++$jZ9_EC&m8>y.Vny');
define('AUTH_SALT',        'Y9[k3onw?Of(wz.;zG9k#b%@X!zXxY,27M%G]^>lF-D=.a`oyXMa&s}!c{%fdZT`');
define('SECURE_AUTH_SALT', '`R,dV8shVha9|#MH03K%L0UFn m.7=|7@:vlE Gc:{J!8T6BK*a$[9{<b_QvLC[^');
define('LOGGED_IN_SALT',   '#U}9@m=B2X4a:-bmZ%/BfL!l8T%(.$90qc >1n%@sPIIbxo^WUflK@0C14>$}^>Z');
define('NONCE_SALT',       'UIn+<zhaMVH|92J=j*rsJ+Dk80?md[o7Qh?;FWC>hkTQei<33S*>=YCH*hV>V][P');

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
