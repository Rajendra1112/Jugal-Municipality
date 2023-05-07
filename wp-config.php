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
define( 'DB_NAME', 'jugalmunicipality' );

/** Database username */
define( 'DB_USER', 'rajendrathapa' );

/** Database password */
define( 'DB_PASSWORD', 'Rajendra12%$#' );

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
define( 'AUTH_KEY',         ':f){,F-/T`zesqxj_+.NPG{^F#W?RhAfIJ/,*h_[=gVy5VzCBL2Ajowcf<U(T%uW' );
define( 'SECURE_AUTH_KEY',  '|v&]x`*b&+KX?8 kx545%A6gTvJX{C[QVn6-y(5K,OS@TrLi^89SOo:jY1yaJaru' );
define( 'LOGGED_IN_KEY',    '-8e0]R(2uWGAOo-%g48*9WNL<P+;-]~7qNi/1g+IDs7H<GTfl`J8kCl$e$Fix3 Y' );
define( 'NONCE_KEY',        '_( nP5.y,D~;YgwQC9ey,63u)rxEq(NnyX#cr1g~q:-LO^kBkhs)W]uX*L<jvQG`' );
define( 'AUTH_SALT',        'I{LJ(|bH#rqKygz3->xp2!xFk2k$Q[FAY+Xv^vt#PG<TDN>f,X=R%EBBLb|hnbi ' );
define( 'SECURE_AUTH_SALT', 'ik9(p31x&t~,s5azRJ`jR`-0#@PNitVjb{U%}N?4dx4>)CKQWhSKY,}|N6>FT:ym' );
define( 'LOGGED_IN_SALT',   '[qHX9R4(>TP7lNBE5,q(|HDHfduBOc;TK`rY@Cl:N/.o5ilkL0r$QY ?~D1>h~e?' );
define( 'NONCE_SALT',       'sc_3gbKn6S$r+8yN3BX9GI]R$5%:->;`!,+H[#K2<c2jB42_N]!e$6Ylq5f[2kcv' );

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
