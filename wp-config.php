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
define( 'DB_NAME', 'prixz' );

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
define( 'AUTH_KEY',         '7Ajpsg3YsoYV{unL[#JjgY@:1/N,3g//e]Idv8^Y0}v[N}re@+;=c/oq8(I`kv@M' );
define( 'SECURE_AUTH_KEY',  'i{&&^*pum`-S>rEYZWN3V>;km=qc76g5^`:fGTr&if>c!g_fae%L[3s6De&INzH#' );
define( 'LOGGED_IN_KEY',    'JD1ff%CrQc6Z<.*F{h3F)^vR) [;i&+;cLF8*,Rw2x=g<fr3WijaoSm$RlZ`^M!Q' );
define( 'NONCE_KEY',        'I-kJmjIe]:c<$#$yy^i1^E0JY(8JDZ3EW]Te?MEdQyB|)Pv?_[ZLBYJoaZlN!=ge' );
define( 'AUTH_SALT',        'ZXknV*:?Q6vS}y-A_kOn5|B9hE*%>cP]JylhSlrfIk+S(z6gfyC;h{#6s:>Ir_q@' );
define( 'SECURE_AUTH_SALT', '<U(v4oZ|SWJL*,%+pBq;eM68KS/bQCl<(!LSq${[~mZS459RkrHZ:|}DF^W6c$eO' );
define( 'LOGGED_IN_SALT',   '{ /DxWd3{;!D7ax?i{Nf`m,8X)ovH+h8EvM]?1Hv+pFt!e3Q5M)<cw-r.0>A8+h(' );
define( 'NONCE_SALT',       'B^3^i*ZMP97`4c)h0LhS5L:G4]]xm1BDpK*3QdN|0}B:pWrw`!{^$,6Wf:.jhke)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define('FS_METHOD', 'direct');


// Aumenta la espera de HTTP requests a 60 segundos
add_filter('http_request_timeout', function($timeout){ return 60; });


