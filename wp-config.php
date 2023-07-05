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
define( 'DB_NAME', 'custom-template' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{G4teI61@3k <p6a3hl:WwO}JRt%Q;5o.#?+_;C9#`k_40*3,es.oOTR%O9tc$t$' );
define( 'SECURE_AUTH_KEY',  ':gxa&x6)XpmlN7Q7w+X4wr:$LE/yR9}faEkA><17VkP$j=W n<XFC`]Hhf}bVs,k' );
define( 'LOGGED_IN_KEY',    'BTs+O_&0EU_VTkcw*8D&itf;2:XOljw(UNNm9$r9B!-KBWzJZ^< |oZMyQ}Ks58t' );
define( 'NONCE_KEY',        ')A6[zkJZ{x{Tj[;IwVpGw2_#moj{+Dh[O[RBbvqOe&d-f^.B=l4Ow3DmDMM A+t!' );
define( 'AUTH_SALT',        '# U|ppW,osS4E#ZO/=>Sr4k%I;,}~>Qau7HekDy+G.!*<yJjEc<5/!)T,VB|._3j' );
define( 'SECURE_AUTH_SALT', '$;]V9#MJsLk<>%0mbo~3C?m}b|-Q}aGn.yp<>lE4swN#W;AwI_-%D&wYn&*FhvtK' );
define( 'LOGGED_IN_SALT',   '}q/S!%qwgW3%Y0:6*o`ZhJByi|jlL+bU:m/=@FOv+;:94}O^Fk6Q$9rR+pG9cY@4' );
define( 'NONCE_SALT',       '9&&!LA?u:$7OB&<y]c61zb3{0K]7BkI)~4`lKA}$UJV`E TrA/tU+lGA#gsq/orv' );

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
