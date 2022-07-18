<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Charles_Cantin');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+!_C!IQO-)20w/MI+&kqVUmXCoC=M7_nI?Mm0WC24eSWNqKd,3I>a)i<;;o}:}JY');
define('SECURE_AUTH_KEY',  'zh]?W-Jw`W[Nm0EYwf-bLn`kV6~kz?6SUmW7N>cVn2Qh>+517}b|06u}X4L.<my ');
define('LOGGED_IN_KEY',    '{AWgZCpI_^ULk4o,XLT;@0#Ez>)Y 0xK`^eK5,m5UI1SK.t[;`2~MK/w<ZuKFUG1');
define('NONCE_KEY',        'VPhu~pC{y0v2.PVw K^J$lLH4. Y`2MGng%x$>%toFrm=sn|D&K-{3})q?L,qVXZ');
define('AUTH_SALT',        'urzgSx0~+$TIfhST+Rjx:==02{0S_F/OZp!-nCjuQwER8Kj&e=YlZ,f`r[Gmk=ft');
define('SECURE_AUTH_SALT', '`~fMkKJJ~H!gk=BG~}b%K,U4M8F/48ID6)s *.F.?DOp]!VhWnnhV#*6ro0+QCih');
define('LOGGED_IN_SALT',   '`l(0: 0C.=@^[~>UuHiS9}&to:%~LX5,8yy?d(+Q^nDYcc4$pS00f,IG(0=L<O;#');
define('NONCE_SALT',       'UgA:E+By8}|69sY=$:}6`:,#F;Y53rU6CgTF5<ic_N-2%79,z={+.G9,={]=k6#+');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */


// Désactiver l’éditeur de fichiers
define('DISALLOW_FILE_EDIT', true);

/* Limiter le nombre de révisions */
define('WP_POST_REVISIONS', 5); // C'est bien suffisant !

// Espacer les enregistrements automatiques
define('AUTOSAVE_INTERVAL', 300); // 300/60 secondes = 5 minutes



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
