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
define( 'DB_NAME', 'demo_plugin' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1;aQ;6ZY0,-y,T>2F>)>M8kRd`iEs5[~<u0SP&U|`HdgU%/QC}1#nLX73xB^X>Qj' );
define( 'SECURE_AUTH_KEY',  '@1gH .W}[^N3l*So*v^duJ]P_q)j=#f[2d]BK3<y W[i89f:u//YRlg]l]!j-LP:' );
define( 'LOGGED_IN_KEY',    'eL.76x7$kV2/[O$(EasxWi/`&Kc`HBKWhu}!Gj|G[7RBGzYqG3$|dzTep0lXogcG' );
define( 'NONCE_KEY',        '.;JQk6Tw3Fp5qS0%I(#4~l&EolQ9  a#j({6cop3)H`J}Y[@1cEv:&!cyOyc}g v' );
define( 'AUTH_SALT',        '82EEqz#/^ivG]o]iJ/(AqAVN~GgZ$e>i&&I^c2}f}@3CMhQ)jc47<E#2+7?**2W]' );
define( 'SECURE_AUTH_SALT', 'w$z/=N^g&3t)]Z=KZ=*eU#&)Gx_RBt`Kwn_ov(4PDm4_ nMu$YS_egETwy%uI7 -' );
define( 'LOGGED_IN_SALT',   '4c-tf@G*-=u7b!Vl 5T&&=HtgK;]H+u|~j2bKgb:nTZjXPaMEl;)F9ji$>b]+X<3' );
define( 'NONCE_SALT',       'oaAM%[!L,M09-cLajY%(fmZu<g|L5ka&]jg{?.cG?qx~D_/Kgs:7Wko g/DN|cT>' );

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
