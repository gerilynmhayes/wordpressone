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
define( 'DB_NAME', 'wordpressone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8vmx1,FJ*!<ArQv_ 2XC+; 2w+q5XL$gEJJ|7U%=6vUwU!JK+qNsS7*w`hD)=6Zm' );
define( 'SECURE_AUTH_KEY',  'd@Rz(%Ge%8L#LqvzX]:6,DB(OvA!Rh=cmTXqS37Ue?s[%fJir8T]}#/0*4~04)vY' );
define( 'LOGGED_IN_KEY',    'm@??F!|1%yHLZ%Y5k^-Uob*HFqf>GfB)*hTdi9a55We_<)JMk!}O,[v+|&v^[6hC' );
define( 'NONCE_KEY',        'yeFuiZ {YiaKv,!?2}57%LP=~~K$GCwlZwW{{N{B1Lw9eiT2jJCr)FDFqx*>c5^C' );
define( 'AUTH_SALT',        '>7FjRN3^XDIO*NP? TN)_jM@(qR]<5[X}/3-G^LXFvT!S)_ECH)W`Z{,!7A@sV#_' );
define( 'SECURE_AUTH_SALT', 'Oz1k|2rfEWUCMCmq$M577CWBe<@Ep#YRN,Kcrj|2`8DTK>o-XNhK$`&ah:9G;J6T' );
define( 'LOGGED_IN_SALT',   '58]Fj*u.z45(o=`f-LhBi!k3bgkRv~qJ6EPblAYo3fB(GnS_QoMD4wL^?g;s#9y9' );
define( 'NONCE_SALT',       'wzq(<`m |Bfn98g9*{i~|Kt5jz[HI$^^]6f>m+.sRSHfD%&Yzp{!FZ<V(#*-(a[H' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
