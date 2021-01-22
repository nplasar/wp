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
define( 'DB_NAME', 'glh' );

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
define( 'AUTH_KEY',         'GkZks +LRZ^MVt#RSkP8JJo(o&i6kFfb)Q}lfW5TG&&nstkT tD^ v+jc4YANH%r' );
define( 'SECURE_AUTH_KEY',  'Vi:}TR9<c_TcnOe/}mkWeL8f)hVSd:`(ofm`_srf1h1KxANB9oZu[l21_owm$wu?' );
define( 'LOGGED_IN_KEY',    'fu@z)2S>yL-F5cmPsBf$t-tY=mttPGsYwsJJ0>A!B:v?0X 9E^qS+BxRqe]D:-VM' );
define( 'NONCE_KEY',        '!N.^Au!o|y(h>bHj(dG[8Q5pPnA_$bpmXN+_UP6RY&zZJCmNzd/5B2r2Lw^4:mAV' );
define( 'AUTH_SALT',        '&q%.5;[P-Cyrp>90{TLxt!X(v`KBj$W^@vjGOi>^{@!VoW/YCgUAg0x{j&UZ6wd|' );
define( 'SECURE_AUTH_SALT', 'RGb%J:/)SwCl_0NtGzMWmVU-po[u:_PrK6=Z?wJrZ((y+.8N$ZrE!PU@sM]RA>8q' );
define( 'LOGGED_IN_SALT',   '6&>rzr;)B,{=o3#|8H-VZd-T6Kn9dIf}U.gTP/Nu;o$HfqX&~/)Zw<y#u`m&4ksX' );
define( 'NONCE_SALT',       'l^S[w$;8 6U.:{u_y~^@9:? M_~u,0YS/%yLnD3J!9J[#ZOrPT#0tea /vyWwK$u' );

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
