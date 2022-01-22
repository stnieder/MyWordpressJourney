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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fI?WyVN{Skz%$.Wsb&xW7Fx:s.~) ) `VcnoL-;APk#ab]u], bYwbL7g$q7gR$M' );
define( 'SECURE_AUTH_KEY',  'o%|HJ>I/glHsW&1^ISwJRJWE+h4;5<HM$g;wpK&s+fw]}`aGu&kL2WzN-OkYIP5@' );
define( 'LOGGED_IN_KEY',    '?-})]p.rFB~aTnhL)qD%6,`6z%03yd5AaTFxEcQ<O*#9yO~~_hdd{mUe*aO~c!v|' );
define( 'NONCE_KEY',        '<l9^Yk&m4kO>:!b8TBr5=e%s*yt{X9rq V0{HKG[@(Ha^AWedj3:Pzj5SL<@AkIZ' );
define( 'AUTH_SALT',        'O7x:vWxA)ZvkiW/L)*K5Kk?Co]+|;v`5/jARD1G=GQs(<8a,f?TD&-4l.)MW{BHN' );
define( 'SECURE_AUTH_SALT', 'c+p@GxHUYX])3j?J;X~.Iq{PtsqS4JzbD/Y,(:Z!X4TN09>k3-vw_dH5qe1AGO~+' );
define( 'LOGGED_IN_SALT',   ',`NQMB;r)+hPOX:3XK4Q:ThozdMPi3QXHzp>K-]7eiPi<8:$<|/0%lmU)I-;0B5+' );
define( 'NONCE_SALT',       '0*(f%4tJy?!P:!6^`M*ncU7L:8(f%^Wkf2!%3-n{bGIyBk*u Xl1Be9l38{1*RL8' );

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
