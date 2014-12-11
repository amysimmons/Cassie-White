<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cassiewhite');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


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
define('AUTH_KEY',         ',2I+!ET@+|1&(WGR!VS!-q|]Xu9+b@-<|/xXQ-F{~KWR7 t:4[rb$wu.4qpMqowX');

define('SECURE_AUTH_KEY',  'kGXE--,Gy1zu4-5@ZjU[~V%0b<EJxCD$82_^4Gs^s7Ap$fytk+:t7Q3Yhp#,V{(0');

define('LOGGED_IN_KEY',    'zURz 0+|O%BBSx0PRAL8W6x8Y-y-0)wN#&;I+wO38GgCq4sev#Nw`+-NP+YsAx,W');

define('NONCE_KEY',        'U,zRjjoAUVUj?~d2 }0j$H[5FUw+3c0R>l)+Y]NJX,V`+WFu`f3yhqOu.U=}g?-_');

define('AUTH_SALT',        'D%D%$SU#$x>Ek=xT_Ui(TK|e^b`A=Wfe|3^TF`I`K_2d=/U|!K0Y>0P@#7|[Cj%h');

define('SECURE_AUTH_SALT', '!T|~u /t/rrRAEHwxwvDY/l-KLNSsqY9C17[$I$<BV|o(*kv`Cfc%aZ4dxk j,]c');

define('LOGGED_IN_SALT',   'EDQS|&i6|TDrIWH,;A_Zx`h8F3{lW9QeVKxO_V[A|[7(pF1(|El{Yp.#UI%I/hDV');

define('NONCE_SALT',       'p(nco3Y@,=}c25mrNck~W^dm J^+~G4*Xvy)HT|S)|2f+,H+9p;yQ.m9+apSk@Ws');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
