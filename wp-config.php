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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         'J9kXVc%|2!%Wl>i#P}?PlpB]tCklsbWm}8b/b>yy[zUV2D}sxb3]A[e096#<IdjJ' );
define( 'SECURE_AUTH_KEY',  '+;/[8XbnL)iZrf+*J-2FeZ`2yP8DI70L_.x6/5;|DY>k 6xN!F]`$*YMIm9S8]hg' );
define( 'LOGGED_IN_KEY',    'H{@yjER~Qu)l%^:S>SnKr]S03lpd2iO$bJ*w9&^@|{%MD:PL1f2/|B))i!+ Q.Hu' );
define( 'NONCE_KEY',        'rU/2BdU- S*VANu2{i_Z`AmaQ^i%sX(cL7I9RAV]NoRJy:c}y$?ztmvv@(.^C?Br' );
define( 'AUTH_SALT',        '(<$Bn#n_BaJt2]en3X((<uEKut6yqu6Y|n+W8j(P8-oHQ(5qmkh%]#[fw!-oZ=.b' );
define( 'SECURE_AUTH_SALT', '8E$8>/b-`]ei,f7#>gCO 0rCzqy$jCcecA_O<p.6[<Y! u[N_lS>t+Ov;x9fdR|}' );
define( 'LOGGED_IN_SALT',   'yWTFl=E_IFuLwbD>.VyPal])V8vU%jZ@uE|asgP*[5Er&ZbtJ*5{Jn?}bG+`Fi4|' );
define( 'NONCE_SALT',       'nu,<,&O#sGJmc2uREJN)-iT:L8+0TZg4/z$>#PT!<+e65RUaDkXuu3KxtbF?`kV]' );

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
