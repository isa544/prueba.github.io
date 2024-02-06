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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'oS/AliX86u4gZsLbMC9p6c}&gT{h8,g)wrBpeWY:can71Gu+]bB;5w_go- VQaaW' );
define( 'SECURE_AUTH_KEY',  '%tQ?t]vr<UQBGis_m|*-_=-R~0V~seYZb!$&Gb]}Irh$}b_Rm4N}]-CnL(VZ yj*' );
define( 'LOGGED_IN_KEY',    'O}&nK1/ _/nU.$/Ep+<tG:{@-pH&Mvu4o9zLrt]Jp=wPzN%e}q7dyR(=N!!7sU?y' );
define( 'NONCE_KEY',        'g2vi<=D}&^YQR43YYvJ)7*0;SQq.NAnD4MXRN+Ef;Uvn%9]{NdDsS3)n+~LSbcUr' );
define( 'AUTH_SALT',        'S*7!5(HQe~JQkLe(uRET,UbW1Do^)oNq(DjackzML=rwJI*Yi*[7)|?]&0W]F90|' );
define( 'SECURE_AUTH_SALT', ';yoB/w2T(^-@wT;[N6mBYejMImfTsKohhlz`<UcF8+F!69U+]Zh:uoFdO=m)<6P|' );
define( 'LOGGED_IN_SALT',   'oH(NrhS]5qE*ai@#8cBj`29]Yd/s4GnSG) E}?lae&g (H0%|=p%/tj.paYV=nqJ' );
define( 'NONCE_SALT',       's1??{)M/@h0V+NlS*Y!pNNq[vJWkn_[TrfZ 9JFd[-l~raDB(,@%2>BB3TK.PBB|' );

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
