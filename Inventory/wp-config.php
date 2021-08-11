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
define( 'DB_NAME', 'Inventory' );

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
define( 'AUTH_KEY',         'q;r#/GmkppgAXA&LYmtioQ_P<I!Gap]Z{?$.jy]_*yDECylfa}pN@:XSJJc%>P:.' );
define( 'SECURE_AUTH_KEY',  '@8+-~o%+(xFoZGk,iB|{-H%/#$6+.cZ`OKx!_6])K|W*<&Y>p0MS(aNV;IM=zHmq' );
define( 'LOGGED_IN_KEY',    '*4L8~J]cp Bijl1w~vjxUmh15CuGD*^Ru,=zif`WLE/ZKk=Df#J41q+m= #cf<jV' );
define( 'NONCE_KEY',        'q+zZ1b4cLxS}L#rT{XZI@F>(MCVS&UQ8WticHA=xzSF<[ 3vYNIC}*h^-{KNF>U$' );
define( 'AUTH_SALT',        ':xI.lDjlH4V{?7H8bU*zfK{0ruwD4I|QCZ-_kQ9k7EcCkEKA,#4(l!UO{ML?m}H%' );
define( 'SECURE_AUTH_SALT', 'x};t1S|c%B20aGM,{Yf|Pp;zd1{ KTE!D[(]E.uix9-)]8vP7F6}tGc~)fm[QL_b' );
define( 'LOGGED_IN_SALT',   'l|}Rg##j,l*9V* >py&d?0[>tdpZc*>#->7yUR@SlJof;+sjo%D:suMF^.Dn; {C' );
define( 'NONCE_SALT',       'v[d<d$=SR=8oGz(> zrEV8rZKajBKn,~-Z.^1T7}eS(hRbZYcfJc{tKm?SrOpEly' );

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
