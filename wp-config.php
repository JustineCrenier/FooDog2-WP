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
define('DB_NAME', 'foodog2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         ':,;wP$}o%PPe`iN|$<W)@+UQy>u:$X%d(K@b_#rOKNGfBXVzXx}|GJ4)~M2Jy)cM');
define('SECURE_AUTH_KEY',  'tHeqvtaCR ,x6p%LGp.qiu%Wl0<>,1R[*AC$-w0J3ssvlgN)[wNIIsVWAYK69O8;');
define('LOGGED_IN_KEY',    'i%NohC1U@9ojP=4LR[r6JFm;p$2# !yIeL0J-60.7lO5+3=eDP[D7m$r^Pa7$Fl=');
define('NONCE_KEY',        '/!dmgBM*p+v1)ICo8;grWgp~7YW`){KP]<*$vZv3|]-]%M~u!h3C(3FHjz]1Xu)J');
define('AUTH_SALT',        'Qc7F*m22,1ca<v898xm_E.KtJ@MLuHq!a(/)^b:<.XiM.]0.K4E6+C.#D[wqqd3F');
define('SECURE_AUTH_SALT', 'o}syuqGykEP#Rve]A8h3/st BiZV9*$]C>PL}@Cd=SSmdhd7j9v@tPsQ,$?.-Gz{');
define('LOGGED_IN_SALT',   'Ry}`]>%Gm<dBF,|Eo`L<>%cKn~~S7E~tGEl15vCS)A0swysKQ|~*]TM,<!>1boL$');
define('NONCE_SALT',       '9$XnOiK aj-8AC_$R~axDYX/HHu7W~IMwNf67!H|1fpbBhYB=@F|d{/5z6yIBKY9');

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
