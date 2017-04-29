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
define('DB_NAME', 'computecnica');

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
define('AUTH_KEY',         'l%&:NOqT}>2JSjPuY2d9z+QTWYi&E2sMt3h~e-L^?EO}[2^]3zbO)npIXpnLsAgL');
define('SECURE_AUTH_KEY',  '_i4LLO%{^w@d~a_<H#Z6O^,Uh4u&?[GVLItrE]R+$;LIq0~`$VQk9F+P6l]tml=j');
define('LOGGED_IN_KEY',    'Yi?X.H1g.6|R}*~n;E,J`|+DM0~vy>p&hIo -dL5zga)TB-917h;Bk<a!OBV.&v_');
define('NONCE_KEY',        'GJXl;$E),u{MviF`Xx(xpL5eQ#VsCNP b#XOz}<{n,Ac/tA#ATWpdif35Fo|G-x>');
define('AUTH_SALT',        '/>3L! ]=^#vW7sydLoMBjEod|pq0sy^|<ja]8jmY!K;vU9>vv{ihnRTECMMU$G/T');
define('SECURE_AUTH_SALT', 'P@OFWWtMO!AMEjr[w}x@t}KwHHGA1CP.pufy>|}_M3w%Ey:<BkNGfKw^Vhd$y.`$');
define('LOGGED_IN_SALT',   'FMD%~`}/?A5Cp* D*iQU_>/?XD%b}W/OVcI+(peNRMdP0Wu)dWWm-z*LAL?~(:n+');
define('NONCE_SALT',       'DsN|wp= Okl]XcvP5p8O^Ywv3(ScjK,B#Bjw1mT.xP^$sip$Xqa3B*[-1.?Agzsg');

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
