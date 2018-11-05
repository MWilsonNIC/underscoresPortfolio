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
define('DB_NAME', 'meganPortfolio');

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
define('AUTH_KEY',         '~|+<UQD}-4=1i5.OA|^qere*}{rFQkM-COnHJxPN$JAIor(40g?35,c,&x`/P*p?');
define('SECURE_AUTH_KEY',  'U}/cyx=gFfX?i9DLR2rU0#hl(F^Zxog{df,3o{ <.s[2!U[89^4#VIuynsO<gOIW');
define('LOGGED_IN_KEY',    'K`R68x*hLlNU.{IXDYmsOO)ZzsGb4K.Y>z3]pV5Xr$M#v ju#mw&TPZ)v5[A ^E7');
define('NONCE_KEY',        't59Hk1dvw]6L|ZPD-+IVoxt-$S>sHR^BR^;X;N(y3;h@5WPJWV::A]`J>).2|Hpj');
define('AUTH_SALT',        '~)4*L@2[38YTcV^U_MJ3co=]C])W35m-55GXH#m*fpAw-EY.5$rLqg5ydzdmE*Ft');
define('SECURE_AUTH_SALT', 'Jdn&_uvIyuJNcZ6==/1uQ0tb&jn9fjG,+r;q{(C8~7M|<Tn]9U]sEQL$*}[>!GFT');
define('LOGGED_IN_SALT',   'mz<=G[lY4$5p)rq;%y?a7f5jJwSRGueGrro+!YGq*xbER/}YQrG,fV9oq3uhdR_T');
define('NONCE_SALT',       '7**M S_>:cqy.a>o#paH2$OfoP,fQ6Bk@rA+zlpS~[kd0|uIa6*:K61=0RN--,zs');

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
