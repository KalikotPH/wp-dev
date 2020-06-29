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
define( 'DB_NAME', 'ahmoutsourcing' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '8)MX3 AJ:~PQ(H8.ZziFxC 2+V_,SVIzxdpu:b_}T51s13>,*V!&%&oxtugnun&#' );
define( 'SECURE_AUTH_KEY',  'd_I}sy1<QWHGOna<)<E>AR$$MFD0oBeYYwCAs7;3s).N]8CF5m~ebX?t[~4Jx6*`' );
define( 'LOGGED_IN_KEY',    'fmo1a6OCK9Iw4Vu6_g=]7l/6IOl2Kk+`5Jh(1rp6VGw>ScLi;wQaX1E5dy+ooi.7' );
define( 'NONCE_KEY',        'k?4=tuu!G5#bY_@zWCfj15;4hf8E.yGTneu%(I@i$IL(6hl[?FdS.5faK/SLHUZ&' );
define( 'AUTH_SALT',        's=@fY@i$B]j]kysO89d~^LonTY|0Imf{n`SW,2q$Dd$oY?RrIV~V&MW1BC&B4jKU' );
define( 'SECURE_AUTH_SALT', 'Z~1F&1##V]?b(Xf5tO.gvk(m7.>Z#2Tp>$Tx[uej?V9M]!gK}V[(ik(-T<z-rK~d' );
define( 'LOGGED_IN_SALT',   ']AiKY}>IZC5PsE#F1[^@,nm#Zr.wUO_X&U4LK@,J.V[<!j}pJZ:@V,pOA?RM6d;Y' );
define( 'NONCE_SALT',       '8Y(Vs5.Mnn6h;1?v`!Dxoi-x[%O:Si2:^H>&u$Zw}LD_R(;}Pb.Ncv22OlO%|~^6' );

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
