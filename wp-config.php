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
define( 'DB_NAME', 'D_Woocommerc' );

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
define( 'AUTH_KEY',         '9>S`&#-nyZviE7!?,DvKMSDkQ^p3>&^k%dP1a9[(4EnT:Zd;z7~S#Os:9WiwjtHf' );
define( 'SECURE_AUTH_KEY',  'YtTJ_q]/goq`3S`lZoO@=mEWPY56X`6*ln (b]z(oV2NzyOFOnVG{fT_B|m0M^ZN' );
define( 'LOGGED_IN_KEY',    '[-Lc!:h:+_Jk+w6Z3&ys=R1X.FZ*6-?`t}H`]jS-hXJ0OGrDs,*X))rz>d;<xMt~' );
define( 'NONCE_KEY',        '*@{ x@sdr{UpFl7mH~Q,Is/k*&-bYE`.,!*5k 3oKKIvt-suERt3VFETK#fg6g[u' );
define( 'AUTH_SALT',        ';Jgf$Pn:icq+WL/Z>M/H*Ej]G~[23t0VtFAY8}D1NdQP:{s[NJ56z>,59v/v33(6' );
define( 'SECURE_AUTH_SALT', '$z%!yAk)nx0q.SpL%<:FIQI<~OCUBgaL$8|^.p%v-=%QR<kd2YsPY:~x;jFG`m k' );
define( 'LOGGED_IN_SALT',   'D,;>O|l//8IbOU*=JaW 3vL[fqT{S!lw5h3dC{{}T`IiAGx)GF|=}/MC#F V|EDm' );
define( 'NONCE_SALT',       ']B]P@e423XVj%2k-&oR:bxfOnOH5I3CeK>=j1iXvL<d-_dyI,1(f=W!w^nHi>^A7' );

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
