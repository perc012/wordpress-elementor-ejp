<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_local' );

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
define( 'AUTH_KEY',         'Vf:RZW%cxE:|_i+n>5F%+MRgG]!RhUdZ9t/2s6*`uh_LX(=- 2N;.|z.0kValq6O' );
define( 'SECURE_AUTH_KEY',  '&.-K_NN,&jGR$b$Pjr,m./AF69ykc_ !b@Pk6Qp!*  5zf)nmq|||_b3n76BNDim' );
define( 'LOGGED_IN_KEY',    '#~Ix$*UL6;,WEv39Kwop!w$WuE$@uB+cT^Oqb.^=)OH?<Rpz~`b!`>4T]AP<xRy_' );
define( 'NONCE_KEY',        '?]P %9Y`Mfm[lCLAO.<+@e/W-jFC(MQct:CY@eR+4k&h.nQ55;UA,g_>S>@XJ  ,' );
define( 'AUTH_SALT',        '%58=i(lP::UiE[L&NHEQ3[=Pa14;s)VyS/kE^+N^$Zuixg|X81!!ix,v+U@9s7j8' );
define( 'SECURE_AUTH_SALT', 'H;c8~q9@g2Hp&Ee4ry L-2DAmCADYU~aRm.ky_+QlAQR74JJA?x6f0N?7]D65OLP' );
define( 'LOGGED_IN_SALT',   'Ea-ZT9JDu[6Zv9!]hpGcm_m83dR|qHRd$d/oDF)taw?X|&2o,FwPlrYvW>):JbOT' );
define( 'NONCE_SALT',       '*B;fhvAt+S^TTIVL=Fzd.e:8oWYd/&,XtBO,4<0*Yf4m(ar;[o$/9 Iw9KcD&M+X' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
