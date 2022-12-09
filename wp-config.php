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
define( 'DB_NAME', 'space_db' );

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
define( 'AUTH_KEY',         'gk&O!Fz5il&^wS$[}REdA/7cV<LK7mw<zZDFYJ}!J=l%-Bu([LdrC1}iux{P0r1~' );
define( 'SECURE_AUTH_KEY',  '5O@xc|SpoHs9{ieL5wmUZs(K}?L:)IHD!G40ZhLr&g7<(*PJKO:i~upz(5at#gc}' );
define( 'LOGGED_IN_KEY',    '~B~5F*4]+}ck#wD:x9XB?8;[0C$VkydvsQiOyGC2{t~^{<:F=q:|B~:}v8}a5vl~' );
define( 'NONCE_KEY',        'i![O32kq$8=sRMc:Yo]w~z^tCJd9dK{8z#*<y<A{?=Iji@=l7@1V?dDR9bvjOH>x' );
define( 'AUTH_SALT',        'gUI$u#o}Z}*Sgpe]M-X_[*<M:Jj#0J2z:t|RICV5qR`A+Ace*30T&AQ2.xvw(S34' );
define( 'SECURE_AUTH_SALT', '?a$Ih]duYQM-i<4@-.5 7)pS;axMT.:NKtfP$E{,{TK4HPl +)+kP/(rkHm;4{4v' );
define( 'LOGGED_IN_SALT',   'S7dkPb+Gh9;-{2MEB@@0]ddC,hw@@yaz)Ycm]DP!I]H:;0?1pjStCf1D81bNv!kT' );
define( 'NONCE_SALT',       ')jXWGQ,Q<}MA>%(rxFm_x@(OEt)ns!UlD{y%Ujm{@0ItL!SUMMoaA~#|i1][Hy/`' );

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
