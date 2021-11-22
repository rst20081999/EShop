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
define( 'DB_NAME', 'eshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7yW2nU_OT^cFLQb4(`&>`s>V@Y>%}oz^uVz kkW!bVe(d!x+E~qebbw=}:@:WIsU' );
define( 'SECURE_AUTH_KEY',  'YG]T$#Y$.{z,K gEv^T5S {<-aPL{j$^Qf6P9n3YXK.vQb!O] /{n9gU24$7%kn{' );
define( 'LOGGED_IN_KEY',    '$`[%QuRp{Z+5@>O;2a<u%.H[yp>/2G3JEX(f$&Q_](!4rqpx53VT7GuaVQn;:CHu' );
define( 'NONCE_KEY',        '3*AOL> Jk<yeEy3.aYgI=9ls^9M8{SwXJP6j5)?go)q(n4s!&<AfZ1sdA_+hME#m' );
define( 'AUTH_SALT',        ' 8qKV<y1|BZpKu!Nm;}yaHW:7ii7_oz5$u!TO^Q42Q5k=>]WA-+83#eJ>pjOZQ6x' );
define( 'SECURE_AUTH_SALT', ':SYo`XC gQg+&U3}XbCFy1Ev,H-jp,X}Q6TaJ23M#b&55<x|_gC}}s[KWo!Pae?q' );
define( 'LOGGED_IN_SALT',   '~1]$&VE[;2X,W?)635|Y^&kP(j>^E?^5qys?~~Xj<+BzC)cE1Q2-J+mm4WI_AH3_' );
define( 'NONCE_SALT',       'b<-@jFpV?eFl0~.)ttoO=#Ns9jdRgXq 9;8Q*W.K6GBl44>h%9EryuScrQ)KAxv(' );

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
