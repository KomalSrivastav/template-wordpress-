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
define( 'DB_NAME', 'd55liuubk6cnd2' );

/** MySQL database username */
define( 'DB_USER', 'qtfrtorxxcrijy' );

/** MySQL database password */
define( 'DB_PASSWORD', '8e388455c86ba305bc83380dd7f51a3ebd641d4fa86e7b2569b544de0f819944' );

/** MySQL hostname */
define( 'DB_HOST', 'http://ec2-54-209-221-231.compute-1.amazonaws.com/' );

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
define( 'AUTH_KEY',         '>X=0$Ig;qbMs8So>]Ma[FWFT323I_B,EWd89DH$2+HLxDA8`s;y[#AqnHl5[69BB' );
define( 'SECURE_AUTH_KEY',  'OioY1^1++;,)uG< =+pJEE1.v0QrDEXf8&clD$rgo/->sa41/OaQ&xq[z?.|J?2K' );
define( 'LOGGED_IN_KEY',    'D>=e)DqpUgHgI<BTH3-%lS}ziN9<;Xl>owu|O, Vo]:B@fbMZDxQUbK*^.;)[(*n' );
define( 'NONCE_KEY',        'pChAm256@D*fN>j0zOGQ2$YRfz@r/Y5L=NyI@aRS| Zr2,T{.83kHGVMc!B1zb~*' );
define( 'AUTH_SALT',        'R/B`WVSsd+$0@z!|;a&t[*y.pR0f|/~gt+qsb4>iB:Ix;N/g3+>xUN!fY!DN0j}K' );
define( 'SECURE_AUTH_SALT', '&.:1wPbwm@^2FOA(,5lYEl<&&4&f/otlU+=LJD,:Sq46Wm>OIm}4zFBi<Pl^^j=/' );
define( 'LOGGED_IN_SALT',   '}r+?J!C:M8**.}HBR3jwQU@[Q_VkS<;-(=yUOP<R(|WJaCnRKn2JmVU.S47xWq(o' );
define( 'NONCE_SALT',       'h_$,[gUo2TuMbUO*F1M_+V:4)%J<)k2o_97.!eb+sUv8Qf`geh(Pz>W99_+tcy* ' );

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
