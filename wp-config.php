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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'JVka.7{RDRlnO(;<HX!HwTqzE|SXq%;zXm~UXJ-@k7C->s0AAg@cq-nuD2-UI/H-' );
define( 'SECURE_AUTH_KEY',  't>xxB:7Y<aG0SLe9z^buyh.`G.UGcb%a0R4B9}p|@|Dp 6eF_B1dHq$HI|4Z=#2c' );
define( 'LOGGED_IN_KEY',    'SVj4:Mkg9Ty2yyq2[t|6!O8~A6:8h[u-2i2B)ue/L8x1/=/$GWc3c*uf^{x}7%eE' );
define( 'NONCE_KEY',        'HKpMd@d1hh&TVxmQ<}s7h2WP-[/}B/(]v@xt:-w=O<.*i5axX-N#&3!,C9kjUO-3' );
define( 'AUTH_SALT',        'tI{ukBc;8E4&;5>CfG7%vA.zO3dU@>/W@^zrr.@Xx)^Qli-:j>c/&QLa!63-+KYz' );
define( 'SECURE_AUTH_SALT', ')u0eSaNCb,%X ~g{ta-~d:8E7jzzh*.x:?kFVmcZue)5rK{xdmj:O4*gwPDs<_*p' );
define( 'LOGGED_IN_SALT',   'N%eP@H-(oG:xYrQ)[iz>3e?zXaIjpd5Z3o.Dk}Z4.XG^<aT6Z2k8F1fu_/4&2(J@' );
define( 'NONCE_SALT',       'b3|R8}|M[aV7d3)+1DO!n^4(%9d.w#yN^H D?`d~I/LI1Imbgwq{`nyC(<MQ~}pF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
