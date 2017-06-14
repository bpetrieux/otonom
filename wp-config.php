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
define('DB_NAME', 'db_otonom');

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
define('AUTH_KEY',         'F+.`0@MuGVD+YXtH|fpQTG`j}_y}.GS_ki#VXM=h,a>Z&wNnBrF,JF=&$+mj[>6`');
define('SECURE_AUTH_KEY',  'Ec]q{TKYZfj([+e7d--{KDP?oN!x6$0][GE+`W)!bwD4x>_EPHk(P *%JZz,w* #');
define('LOGGED_IN_KEY',    '2P[)|BhGEYhT?Nc[BK0y&Xwb:tY./I+16G0K+Lrz0[ex7@bGb(@O%ypN/J9WMuVr');
define('NONCE_KEY',        'lmf!|B.ec%86r.uRD12bd/)ip(u!RrX b^*q%Py%r~|KxX:j&.afYyv`=LknEks]');
define('AUTH_SALT',        '6`3qpynwzmZ2Sm}&lraqt6]pqx7=2Ov&QlCTrE_2e)r0IxMH#dl}qYKLuXVH>5Wq');
define('SECURE_AUTH_SALT', 'frk[<*^XTRJY+4P~b.Ky%Tzgu-_0{C!]>{5Oq_b,jmKLNX|,t=KDR^(P+?;{h//&');
define('LOGGED_IN_SALT',   '^O{+v^*Dos=+_v~nvz^GOvUhlk.l}6pNyZ<$]WXJ+#hHIR<3LF5,%/3i?U$U-gR]');
define('NONCE_SALT',       'ezWo:2JNlmh5gn]uBfauuqpcI!zv Zl1NDSQ&q tmY-Y59@#=8qnv3Vy@M_&aw~D');

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
