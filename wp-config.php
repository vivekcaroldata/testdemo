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
define('DB_NAME', 'olaxtonz_jobster');

/** MySQL database username */
define('DB_USER', 'olaxtonz_jobster');

/** MySQL database password */
define('DB_PASSWORD', 'G?k%XpJsbp3X');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '.j&MWSefJ@gok}*!?[UZGa5Q40U;@,oA]p>CbGlZ4WI# % Cx:86]8YhtZ&-P=ZU');
define('SECURE_AUTH_KEY',  '0fVmEBZ{Zb*p*&@:Q(@Cbu`. 6]!ItyMohmEjQ;bqz4{qT:<<r+kCfd^9%3l6(z ');
define('LOGGED_IN_KEY',    'cKlq@r?pG~{ON%@Dii_XLw*aDM)u*HozbRe(Y@|{TSE-I4 a}.C.k?i@>k&pz*>p');
define('NONCE_KEY',        '.0#nS>k(pI,-!m f+tfS;%jz:$9?x.c-{B.._U4Sqy=X?C[m:*_hj==/1E**t$Pp');
define('AUTH_SALT',        ']gK=3clvp,Qw-IF|=p5DKD;q]M[!G=L7e@,2ENpJ5bE<^* Sk2&Ce<.4Qgb<zI7v');
define('SECURE_AUTH_SALT', '89CX+fZe~,Bl~6xpGb.io6UdUOS^uP9@8NZ=xdMb-Qy$a:G<_ybIx$KhRc~1jUrv');
define('LOGGED_IN_SALT',   'b5IWG:f$_p0KkvOJ`pIDWljnNx 9W+yrum<Gm1SB!&e)-xb6rC?&H<!4$Dp=Gw1R');
define('NONCE_SALT',       'Z[Y7|c;lB9qc0E`6BK(mH^k0s{|K0tI/t0BZ(^Vh^BAb0y{i{5_Ld!I&mb.A[894');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define('WP_MEMORY_LIMIT', '256M'); 
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
