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
define( 'DB_NAME', 'ref_project_4' );

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
define( 'AUTH_KEY',         '$TXP+C.l#g`UhN9_P(vbW|)gtutJpG[c,jluobJ5)<MDI+:;M}inN<C,rnbB>.Tz' );
define( 'SECURE_AUTH_KEY',  'NF1,BRWTQ^B0!`dZKfyoC#t3XM IM PC!4pC?MkJm[[tbgDgkfK &i 4iTe%<& *' );
define( 'LOGGED_IN_KEY',    'PW/OCP`xGOj~XxXq!}%-4IaX1eMxl:^bHNyEAj4lCi4K?^^LRU8*8UO:5l!=Q$U,' );
define( 'NONCE_KEY',        '[^8]V?~-!n[?j~:ZoLmQHFVzSJi.atm*/IO_<$(uEiQRkE]k(_u`XG!W9&[g(*=H' );
define( 'AUTH_SALT',        'V!gjfZ!<3Q+`^^R!*K4dqPqno1j@N3xKd?~v5E# XS4A]H99nIwP 3%J9tz}D 5z' );
define( 'SECURE_AUTH_SALT', 'nX)f3>SXTP]d$uc*.5qi@,5`14=E0pa_@`diil@k3*I=whLzp^Qk-vmnuuVe,dS^' );
define( 'LOGGED_IN_SALT',   '>&+6+RelFnPifRb5<@`WQZx(i<Q0Y`>hFlPn5jZxv]+pGh78cbwJTf1)V^{h|LtD' );
define( 'NONCE_SALT',       '>A_fM 9^dbCHlQb#1UY jLp()LJrW&Tb~>G%P_Qzy_VF11vR4G+w(ucOX|:sdN&-' );

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
