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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("DB_NAME") );

/** Database username */
define( 'DB_USER', getenv("DB_USER_NAME") );

/** Database password */
define( 'DB_PASSWORD', getenv("DB_USER_PWD") );

/** Database hostname */
define( 'DB_HOST', getenv("DB_SERVER"));

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


// https://wordpress.org/support/article/installing-wordpress-in-your-language/
define ('WPLANG', 'fr_FR');

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
define('AUTH_KEY',         '9dM4y/_.fn<&R5NIH SpuEa?AsMH|L|K[iXj@I(y;A|0%a,4]<@4>@|5>S+nLO=W');
define('SECURE_AUTH_KEY',  '$Ux!OL[=)[d@X0&Vaz)cWYCGPHJ8JSn/MhbxPzx#]{_]]2Pq|>[:%1gbS|W_0C6;');
define('LOGGED_IN_KEY',    '$|$Q=KVR+LQ+@4tyBUVRt_]|D^RX:_4ma80&.bzI$OeEQchqq-xC{%TKJ,Lqt+L}');
define('NONCE_KEY',        ',d~B[f$8SUBvUjp-1be(Ng^cPv+2UWX^!M)~vO>1UJbbc7G0H-<.*Z_OkBMm_]-g');
define('AUTH_SALT',        'yt+qA,x|R}64gXOli}lr4_),S-A{|qg|@u0%$ |_g,.EN.ybBdl_hJT.+!0b)~JL');
define('SECURE_AUTH_SALT', '0BWD>EdnEKe!T!~mSb82+x7rs-/R/_YJJqW-G<AP0&SW}U~(+ _H#%wgW9D:w}+2');
define('LOGGED_IN_SALT',   'iA1Yd`pr/8*345EkW9n=etCi+s|za*T>)9)0Kdz7#ypN4(Sp[||C;LQZ;wfrx+<>');
define('NONCE_SALT',       'bA$I.3oyMJ2!nj^w?nLwF).=Si,^.Q+BH_l${rN,[azw$@D1jU2c@-@COq<p?1;o');


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