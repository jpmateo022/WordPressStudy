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
define('AUTH_KEY',         'W.`kdVc )Q9uuk|%_Kfzq}5L7[*S6^DB,ZO (|D-sZ@/!m_UNj,C1e5?o~/EKZbi');
define('SECURE_AUTH_KEY',  'p,bO9oJ7I`:su@8|R=<H;VFy;ttq[/-b ?S92]bBVh;~M,QbGob>1B#E4@[5La;z');
define('LOGGED_IN_KEY',    'AllPgzpx2 VvVpuc~rk5,Z6lcYg;]$Zl_28EYp|,`:,,Q8Q/ZPv<pf(ig%2qhZuY');
define('NONCE_KEY',        'S;4QsK6k&Ezz_(5Fd..FpFbR`pZK,WyjgPvc67Q>6z+|6s:tCYmZG0.M%abl-yM&');
define('AUTH_SALT',        'M7*~i<Yl^Tg.;>Lh=,Ef#S5JbUQkCW`>JLeyy/l(a;%[1QeWLGTrj`f|V*{_r+@E');
define('SECURE_AUTH_SALT', 'Dpm~/$r`=;mfvYp4k_+XeqIH$!2g]!4y=zjB^ qF.#(SureecA1DCt8+p3=Mc0nH');
define('LOGGED_IN_SALT',   '6sB=boj5@Mhb0=B1Wy$~luiAJ|XV[`CkG`V;z%|(H[>-3j#j*t&$loyLTGvI_wsD');
define('NONCE_SALT',       'key,N#*8<@Ggg(PXG]Z<MZf,$^Y9-e$];0g<Jiwy,?R7}iW;cGA2d*6=Yc;(#X.u');

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
