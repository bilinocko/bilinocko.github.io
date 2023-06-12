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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog_db' );

/** MySQL database username */
define( 'DB_USER', 'mika' );

/** MySQL database password */
define( 'DB_PASSWORD', 'REDACTED' );

/** MySQL hostname */
define( 'DB_HOST', '51.190.6.81' );

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
define('AUTH_KEY',         'sFimV}j7`P;;60|{t6AODjZ-t:Q*CUm~A+3?U|6tG6;M:P~P0pyp;2qgVv=e-|R)');
define('SECURE_AUTH_KEY',  '_K>mv$)u-F|}}!7ip}_/LY.WnI.LV44gE20)6_zVt>cl:CwBHi!/r-t XaqK7/m-');
define('LOGGED_IN_KEY',    'skaWsR+tDu|?%Mlp3hD~ZoSe2,AXoLf>qQ;)y~WKCu27R >W0R|-mS7%,h>+eB#h');
define('NONCE_KEY',        '4-S7k:(4g2Inm`+LnX;8[g0W(Ust!/0J.(|o$cjaQ)et)C+^F:#8f1sU{a=uN?2v');
define('AUTH_SALT',        '7SHMdO=aOsz+R8&&ZxzQH tO=tTcuG!_R>|X;m~(0-E$<[SD@)GQU-7Dv0c/gwh,');
define('SECURE_AUTH_SALT', '&es*3b)7(b+h0k4 Q; .^z[8J/4D4*Td~oGf,Ur3CTv@qbZJw;J:xRXz<Q=+w|-!');
define('LOGGED_IN_SALT',   '|nFA~n,oTK!`SbPb*CsM$BwxRfq hh1h{]+-q6J|qGl4YT*VI:OuZ=-2-b-[Kg H');
define('NONCE_SALT',       '#-nR->|wgEAFcW,*8J-SA>,sO:Taue;+/HrE^vXkC u3ePsZ?PW&=:~hq-]YV-2-');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
