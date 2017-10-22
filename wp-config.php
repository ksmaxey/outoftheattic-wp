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
define('DB_NAME', 'outoftheattic_wp');

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
define('AUTH_KEY',         '8DyzPs}95nKeoUcw539_LZ&<2z^`iK=!b>aOS,<Q76fl59KvE]2H|m$GHw5a^g@F');
define('SECURE_AUTH_KEY',  '1zCDV=cPq$aCi#KB;JKEyBJg=R18hSCd].1~<aJr#jtZ9G!sJugU>W)*r^O;%qEV');
define('LOGGED_IN_KEY',    'RCiz`yx6ABC[fid7(Sh![D|kV{N{jmdr]SZk6T*0L!i#T*nfF1^>%g@TLb,mr~DJ');
define('NONCE_KEY',        'c^04wBc-ASna;,;hmgWp>J 6K9 dN^Px3kfxM`} 0Nr}5,HOH9M9ke?ru~M |sl+');
define('AUTH_SALT',        '.^j4hxr?`6qR|?UHC%S2n<SXz[p;0X?wj&3OKr1Wx~ZN1lq4X|xU/~a:{Z:ttCU*');
define('SECURE_AUTH_SALT', '1{c)Ka=PRwUe.=G.50Cl0;y8d*V]32SN.O=2)1)NW9pNq~E#(4{h:/<B}Kr,9%aU');
define('LOGGED_IN_SALT',   'ZN_j25~<iR5[F ,k>E$/k(cs@%3&V{pLY/]yv|M&1F|<U|[heMSn,gRGIshR=4Ox');
define('NONCE_SALT',       '1Uwh6O/c^D(-}^{I0&pN@y:xy95KfE8>K/LJnu|I2#Go$Q<>xlh3&G*g7)QkL2pg');

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