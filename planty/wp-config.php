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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'iCRjImbWMj@%Jhs_%s:r>oC<<K+8{8ELG9HN!Zx1{v=.@!HsQe;B_r@En>d.:PO2' );
define( 'SECURE_AUTH_KEY',  ':[qx<v~UmKv+@<wJ{6m~N{l{!~~6UN:_rHc?SeHx/:d}<`.)C%L8_t%QXK8FEkc1' );
define( 'LOGGED_IN_KEY',    '04_8+B*(/<mqEKXX{IJdBhb2oNx=*)D4JbWxigZ933n{H5VetAcqJUqN-2h<OQ;)' );
define( 'NONCE_KEY',        'C++Q5Y/bl@E-:f|~ycM8R LcGR|,3s$ckozk7O?DyI_A,a`?7>9;NV4-v&0 P(|H' );
define( 'AUTH_SALT',        'E<-:;Z/u:miEXDVBU00L}hUOQ|M-Nx[MC-#u-7^}arE+hpyuLCe (uUNmw<]nR;W' );
define( 'SECURE_AUTH_SALT', 'c&Dw~CYyFJ& }XF!wMZL>-:YM#^c}1iZV]8ul;f{$ru#L#Xb/#}VaQdnoaB2h):U' );
define( 'LOGGED_IN_SALT',   ',_{[]Z]NN9?vnAAQ6+T-XYoLcC<w^E[7EaGVgf`t:,(/mr<]K &&og_%h9L f6nQ' );
define( 'NONCE_SALT',       'T!IvntL2}jv( R5m=HslYKbxhK,[a8{)NMGj02M40s]<eBl4t_d)$nJZl$,.S,,t' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
