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
define( 'DB_NAME', 'webstarnews' );

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
define( 'AUTH_KEY',         'k7Lr5(mF7%E,-w!<j8A:+^^;WFBjHJ%Tet`k;f^Q/~Il%P]2hVh5I]?63z%F9#it' );
define( 'SECURE_AUTH_KEY',  'd|vu*7tg0%@/u>_^W}+=QQx1d3E{VNs-?@`Crx6%n@-<j9ma~D_$uj4a<KzIDvQA' );
define( 'LOGGED_IN_KEY',    '2YeWqw%R=l^HvST}~$o7)>t.1]%@!Si&=3|%(1>S}#NW m$^=gtO6;PdK{S;+Sw}' );
define( 'NONCE_KEY',        '.Gs-9~U`mwtDu)r>`#@Eh+)D8MOm0pDBE3WGZy4Po3Hq5!t32x.&_<UMakNsB:UX' );
define( 'AUTH_SALT',        'i:k~[:t@0jDV/bBa:xFm>EkOiWCDJ.Ad;tq/#,2/8aq/hS~V6|H_)F4gGBh?C#fQ' );
define( 'SECURE_AUTH_SALT', '+Jrki&hMw>w`gy4%hZwU.w}]IY2s`1P%{{!nsxFUO}{m-@u~BTsvF}Pm:S M-[&&' );
define( 'LOGGED_IN_SALT',   '(i?:kqqu7JlWxv9|D[n!)dc#a)fwz.LA(1yC`=6mLW<n%zeh+kPcVmP,s4c!E{GH' );
define( 'NONCE_SALT',       '/LU>^/j6J+w_jo^qa^c+L@(nx[X6Yq|Tj|LP9?}IE#Y0^JK?{K881D]a;`Fp(Vuu' );

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
