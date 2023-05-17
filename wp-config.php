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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naveen' );

/** Database username */
define( 'DB_USER', 'nani' );

/** Database password */
define( 'DB_PASSWORD', 'naveen' );

/** Database hostname */
define( 'DB_HOST', 'database-2.cgj73p3lvgdj.ap-south-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '4HLmt^<FN?@?[{~D=;p1:7Y@EE9yz^#&j<PV rp7&b-m/1lwjJE(B?]oB.<mEN-Y' );
define( 'SECURE_AUTH_KEY',  '-bQz~kCGSO*9Z7r~6gVBs=;>0SMTC3it!w VT-Y8cu{~!u 0dBeJ|m;#-gN![@%S' );
define( 'LOGGED_IN_KEY',    't*X(.<MGbUw30.UEz<j=Njkr-4y+esf/b#GE$MMa$Gg/Za.f-$+i)o2iuMl!?!fw' );
define( 'NONCE_KEY',        '65^VLpX<tKgn|`q)s9PV?z3;@1TU]{y5bk(R1~>d?p&AQYKy|lzqG<CALD-DD(Xo' );
define( 'AUTH_SALT',        'ev&}J-8-fSqLu(-pzI_o$lLmI<>.?$Il}J=-NsD!J:vp/B@S8YYF%sT[{oR6Sn@j' );
define( 'SECURE_AUTH_SALT', '[Pax6}wNz&fJq]4Wzyz1_E?(_GzEg}sa(+(:,{X r4p5C/LzISW7^gkL 2J3V5@f' );
define( 'LOGGED_IN_SALT',   '!vOT*R}C!Hp{U:>j`RD2j~i$75P*f!,O9RF?y->ux>,rEEr@3-~$e8$?>>`ARo(X' );
define( 'NONCE_SALT',       '?a)(pL9tt5ktZR0atxK2&oPVkG=&8}33+wz ghVElFOf1ixv7dM#pbk+v}-NT{M/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
