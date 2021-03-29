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
define( 'DB_NAME', 'blog' );

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

/** INI SUPAYA BISA INSTALL THEME*/
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '83pTv%-%5o{p5;9SKjgd1j3HIy^yLpf2jNWyMSk+YHVU@JHSQZAxroYrnfz[=?i(' );
define( 'SECURE_AUTH_KEY',  'qq.{mR,Yj?OG*Ymbe=LudME|0$u7{ng*0Np})3R41.W#mOK 36~HAEc0!3!c_93K' );
define( 'LOGGED_IN_KEY',    'k>6^aRz ^}+X9s6rqN)[IlVHw}tSx|jCzzT #WRUBL|CNlR;d]!7M(t1e8PSKmM#' );
define( 'NONCE_KEY',        '.N>)flH^pi#T#0l693!Mk! o%*z.K<Sce+zW}Jd:%a70 o%kMYT]`^|b)%z@0)h>' );
define( 'AUTH_SALT',        'Rw]cg;?&3=gl?*iu~nJ*Qboe.qa:ny!{ ^5.7xLX#johk;03A18Wa~!PtYdr)WP]' );
define( 'SECURE_AUTH_SALT', '*-NE_Tn:.0+Mqj0,*$0H;Lh5sNXK=ao^3B[;S;?Ij94VsO!:~e<Z0WN 9O|nW&Zi' );
define( 'LOGGED_IN_SALT',   '_}b3gJctn+MI{Y`cmTFyGPOOH[-$$D)kVv*8ip@#+]u4v#IAiZKH+Nc]~)mg?[x&' );
define( 'NONCE_SALT',       'xu4/o,]Mqfszhy!x^^J]u*(B[<.ip|)Z=S|%+cM=]Tu+ n(S hc`LsKG e>1hoPJ' );

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
