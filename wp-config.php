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
define('AUTH_KEY',         '8TM/|``VYE5TFCztLCS9v#~uU I9ca|ugHG?n>w%gKwt>fUG:Jp5+,N1U<~rSByR');
define('SECURE_AUTH_KEY',  'fq3dRTLC~!>bR_O5dJWy$^$et/OEoHrKZohAoR+$+&-]6#gX(qg0(>2U:{2-(1<&');
define('LOGGED_IN_KEY',    '/1|SIvF#He>wWgahK[|mIODi/<74[$YUXTs:nP&k[;=n~2N3B-6niPH^+2ke0ddj');
define('NONCE_KEY',        '+{dcC2/VXd_S~kz,A<oc.Ew?(=Ib2A/C.a)GZ$,O*<5/D>T0=w}P0_Nk*Wr9kd@J');
define('AUTH_SALT',        'Bh;vIT,`-@]#t<?!e`@s+r6E+VosO( H]2pY.l>xY[VjyMri6ttTr,xtgTLEua=T');
define('SECURE_AUTH_SALT', 'Bh~5?p)C!6^rwdYQZJM[XJZASfh148B8q4U:;B+EU[9`$]i{W1p%(y7hqsY#Cf5/');
define('LOGGED_IN_SALT',   ':ZI$FK}M]>M?wcxe0pe4=~grE0l3`IbYh&xlg<&>%8D}KbF%]ZUL4!,.QYmZPW@j');
define('NONCE_SALT',       '}tvb2&|7Y),VRe F Fpe:]s]z4F2I%1Yt)QNXMc7XRz0tX#j3=LKuz&8{h8aBE9k');

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
