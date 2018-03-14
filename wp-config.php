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
define('DB_NAME', 'mamp_db1');

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
define('AUTH_KEY',         ')}Yomz>ZF!Q-^g75n)bBG.K*/aZ]n~7q{]t:VNt5X>Ke*d*y/[--=DA#n>YFo~UV');
define('SECURE_AUTH_KEY',  'Zr;@vePnGS21L^CK04l>rj=<+$L~EgW|r2(&n,Y,aA[B)([zUsr_X#Fhl&$hK,qh');
define('LOGGED_IN_KEY',    '%6{-nv<AS&pH|{9CGuba^.|$_MVilgB$7i3?TWzr$~KG<+l`*m7%4bw2 E!=MVx`');
define('NONCE_KEY',        'g#tok$X>@.R&WDJgapTv0lU48poX~]bm@m$h0{.>|:bNpDi,$e`W;TU?.9{E[k|I');
define('AUTH_SALT',        'kdKGVDsO:;h4kkf-N@SB@{TnsbVS;{a8(&V6>c]i?6t|rXxMG!B#bX@Rhe}W#k{u');
define('SECURE_AUTH_SALT', '8_T!OF4J=uqJ%Fu<l1}r!iV%1(s1ZUAKIjpdO3ncmsGKX70n^LsNw56e@T04&*RH');
define('LOGGED_IN_SALT',   'vu_c)bM]xtz6;-GuM?(-@P-9A1](O_0z6[5p{<@&x!@!(z8d/s`)yM{L06mda1Sb');
define('NONCE_SALT',       'KRd9Emcc@u>1_lZxIw7p-u^TV9>%~kgG0C#C#3#yc%n=!+$CJ;u|O{!X/#3[@fKp');

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
