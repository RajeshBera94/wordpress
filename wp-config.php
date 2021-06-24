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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&dEW?REh_Vr?jSV6Lby:|B&4-#CX#v< F0T:BzS/2=oB-7Z l{72Z-kYbinaJkT}' );
define( 'SECURE_AUTH_KEY',  '9g,>DtDuRe0LHwqqMM#exq@WAq&Rk)ftZyBUg_4e#s(kZONJI}ecH|R-_5BIJbo ' );
define( 'LOGGED_IN_KEY',    '}Sjw!]Z]1NpJR6y34WhF/y8IrqQDTuFjQg4 o@/QgqkVbL8xW?h7cI=wv.(UuH*;' );
define( 'NONCE_KEY',        'f#<.1DEFO{sP&sFzpjM:a8}v{$FM}wnN%n+vV@GsD{!I1WV5[j.p&Gg`ElhkMiO)' );
define( 'AUTH_SALT',        '(%.xHn/gKPP%U,d*b#lq5@}ERZc]Wkht>lb~l/g--y.7(KLp18m(sIIn4R/<{?4|' );
define( 'SECURE_AUTH_SALT', '/IC~&:-utfm;f&jC7YIp6[db7bd42CLNZY`nI>$#vfKedY=@ENZY8hGN!jkPuwF[' );
define( 'LOGGED_IN_SALT',   'K*4cbaK;H4)/ig;wU`$WS3f!SipRB,,CQjUq;IV5-NC(c-CpF`oO,D.CkTD+(t4V' );
define( 'NONCE_SALT',       '9v8Nyc[t%NDdUp%-I?M1RCBSZbmMe<h2]qh%jeA:I#GZ_asFc4)gl-6++hQP wzG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
