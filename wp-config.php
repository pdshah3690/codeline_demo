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
define('DB_NAME', 'codeline_demo');

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
define('AUTH_KEY',         'FEhsl}<2+,tQ~n!:kgAoQ,@WpBD5t9-CZcF8_ur**E?ELlQK X<i8F2#t{99flm+');
define('SECURE_AUTH_KEY',  '{gTf_H^)z`HFg;e9un0@RiF8hlxYSS8Lj `2Hy35W$xP*(7?K<WBfRY5ET6}Ib9:');
define('LOGGED_IN_KEY',    '@y|6PPJ|iz?H`3J[nT>[dXnga}r<*|J7X1v@e &PDJlG+-#zA)TE-NAcz1xb<iMU');
define('NONCE_KEY',        'fMVyGFc^0^}*B*^qkGF-wlvyR#CCvyEdDecbWeKK_* Y*SyB u|K(lso8BH>Jo;3');
define('AUTH_SALT',        '{b;bpChO|epBxLt~qM4A?-fH<IE{^pqw{uLZ]8e5}GU9e$)4I_@0x[^cV&thCa`)');
define('SECURE_AUTH_SALT', 'PC5fXDb~ HmH+mIo|yj8rbj1[87<HS/Bnk-H*JWyhN%QP2%.(JY&+g!b<+*LcTH_');
define('LOGGED_IN_SALT',   'tE$R/uE+z0l@`[4!$Y;`7,.q^CHUBMxbc< `~x4Q1QI}p(K3i(0& 5S;Otcvtp 0');
define('NONCE_SALT',       '?sUIvpcH81}Oqdkvh~D)Xd5V5=A)Zb2iwhsp%_*a=0`p0[(qp7RkA)DM_zw5vv/D');

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
