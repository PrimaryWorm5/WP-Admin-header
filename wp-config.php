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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '!<f.xYMwS51<8}!OPaX*-]`{S[0FIY(@?CLl?Od5BCyJWKwznTxoTeGzOT$a_U $' );
define( 'SECURE_AUTH_KEY',  '@xMpqpP(+~)d@5v]k2r-;zFnb%dA{C6uZk03}S$TAU~hjuzmxoahI%J8xuM1vWee' );
define( 'LOGGED_IN_KEY',    'V_&>;6af[(5/8uPtc&O2r74{.C-X.[oAf>a@u4IT98h!;S]1HJKwjL$&qm6,nMmn' );
define( 'NONCE_KEY',        'Mcw(48Y}jG_kwrPc;9%Xs=k`mL,]L*kcL@;>c/93o0aPRWaCJ_B elJ#YB#Zg2TJ' );
define( 'AUTH_SALT',        ']<?letIbntQd8?cjf._WG_FhhY*MBi@W2@,/cQW/}*T&<q=>ZSOoqHp_zo>v.DGQ' );
define( 'SECURE_AUTH_SALT', 'FDxOvUaprw>2]FwyfCH?<):q`V2Bf8mt2uS}~wmsCDU60EKr<`Tib;,]U3}`)!Vj' );
define( 'LOGGED_IN_SALT',   'i8n;`.P*lV,#Myw4c*w[?XDsywzc}L~mMc3w-3R]Oc:0A74+n<quQb#]x8Lxz5)K' );
define( 'NONCE_SALT',       'Bj=!SZ8:~0:z9lw(4y#Ujsa{(.~5Q1G=z7_9-Ty+bWC-#|gKn[e_ OJI,Y:muKM]' );

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
