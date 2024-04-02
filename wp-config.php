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
define( 'DB_NAME', 'wpdennis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '@^,]:=:g!jU6nOuqCJm;qMDB@pHtTwgpJ8L<<=P65em-d}%O052zv>$&rPmc&|sw' );
define( 'SECURE_AUTH_KEY',  'o*~I2f92Z]75c{*YhgUB~4Lf} -sGLYtC+bqXxH`r;K=G7e[Ir|j8g8O&Ck`f5)_' );
define( 'LOGGED_IN_KEY',    'IDrZ*$Sf}G8yAq&.FWF$_,JGTLAP566hcTJ-y[`IkU`lDNHv`t z3wUh)j5p{SAj' );
define( 'NONCE_KEY',        's$>3/>cAD@:+%g{Wk*cIM/4+?0OoD_t)&K,vyF)OpeJ2NOqu<i~q:~g$ X2iNU8X' );
define( 'AUTH_SALT',        'bkaIdo@#1@acp;].tD<=Q|5@w(h&Ye3oUO%h::<MaN}Or{&:EOMo0rN% ,7GRY$}' );
define( 'SECURE_AUTH_SALT', 'N#>jtdwO,>r5A6(X.VOK|;h=[&lvoJ<B ZinW; 3@.p2dR||  63b}}.fYy!{I>,' );
define( 'LOGGED_IN_SALT',   'TPoKl@zpMYSM){P{pp{q[1#I@4W)h?_1$Zq0%TlxSPyUD#BDY5gi `i@[ L|Ja]B' );
define( 'NONCE_SALT',       '%A7E~7[AsGztBWl!6)KaD:((n@Qx=D>+|=f{L</Gm[e~6Kl42$KLeSv,Vq7?U8kN' );

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
