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
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'y>QI?[e1zx3tyO!)=Lj[z_E!<YQg!UhkG)qda[Z$wvq7.7i?<xN?[rK.D_C=>Dqn');
define('SECURE_AUTH_KEY',  'PR]ykpDw>sbF218L*7xaG8dq}_z{cbq$XI#.9666du 9Hz{P!Krfa~f-*3RQXtxZ');
define('LOGGED_IN_KEY',    '5*npJ>m/vE4L}^v9hJRP<v4?sfL+:ft2@`B)wf5muT_UEE]nMz2CNsLhp8_#)/[$');
define('NONCE_KEY',        'Yy4+#0eY3bzu9Ddj?e;mzn{YLcvga-5`qW$G-R34JTUxU!N.,J`,@iHxN?E@mV-2');
define('AUTH_SALT',        'UIw_o(s)/Kp@|WgfdU4ry@42!$q&zS5Ul~[tO_}M^,d3){ D]w.*el/_~7f),eT{');
define('SECURE_AUTH_SALT', 'h&ZWUyF_9AL6+4VJSe>{L.#tUy1o;^8_d@e}JM?L};l{_II6j5WD)e>K&n]IECL_');
define('LOGGED_IN_SALT',   '-x-(QwDRkFKu?cSN]!K9XkZX(WXd<,.,p.}iq58)^loi[B,8mV!Gws]$aXHvvQz ');
define('NONCE_SALT',       ';=1{O.l.b8Kt?b=s%nIl`^Vr{[G4xAMZ]&}Eb1d&}ps}WQ)s uHA8pr346$^;ge;');

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
