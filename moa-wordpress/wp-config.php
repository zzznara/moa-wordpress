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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'thgh777');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'B]{M,fm%40{sy| Zeq%1aK5dC8)Z@[p`7fdxl~cG-`q)nC3hy=eh5XT,`4L;OW|0');
define('SECURE_AUTH_KEY',  'k^Wf6L4ScC0w;|hv 2KNXas4DmM7?5Mw-XV[_}1G @_AWIH6x=fm9XFn?@`x=+wZ');
define('LOGGED_IN_KEY',    ';tK..T[(sQH&UfrBk=Kb}Yphckl^Fj7A:jJC=5cAL0B1S.in5bu*+#)p]PZ2$Y4c');
define('NONCE_KEY',        'L,-ND{qcBsN<3/sm+f2{1Q#LwM=@o~l_X&g@9Ci,K`^^A=%jDzKZM0GCAbSZIK?I');
define('AUTH_SALT',        '#6X{7?$12:a)gXO t51=r@8,_cn0>9<9?*|b&Fb>R$;2`fxx+?dcCvEiX,H7?({O');
define('SECURE_AUTH_SALT', '?fdjiRai>Gxt;ugxV6+h`.v= })i/RqF`iuZLLK0Zel_[gIcMuYzr?*3hT3>9ZY~');
define('LOGGED_IN_SALT',   'MU*Vy6FF0[O:8YvmrRl69mjvwi+}:nP~Ebf0?tG0oS,!.P>>w$ri,HgrV/I#;okF');
define('NONCE_SALT',       ':bwo#WB)nf*F.`Jo 2-&H-v@[!1m565oo}TP>.oc#>/b4zv;+1`8`X}NX==1Si!8');

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
