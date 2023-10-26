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
define( 'DB_NAME', 'ra' );

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
define( 'AUTH_KEY',         '_k7]+_di{bt>aF,=Lr.AOyC%gGwbY)bqJ<Qjy2,W].`J6~</)wEFvwW@OLm?<V^*' );
define( 'SECURE_AUTH_KEY',  '7)#fEAAF45q8}lz<VYU+5BS[Xo,=biuJT8405Kn/LE :Hj3+ZXoSTucwCfuh_}=I' );
define( 'LOGGED_IN_KEY',    'HMPkbH@/U|g1 KmnKOiZ]viEI7iP*dC08aN[XE%Pixr:_B~X}oR8bq86`Xiv2vKJ' );
define( 'NONCE_KEY',        'i2$aZ1X|+<T|#-CJtj7s@pbwjsFUH?VI9.FzAZ!EuaW!|F5nCjvN<t(ZfY^v5vN=' );
define( 'AUTH_SALT',        'Cd|ccu@LAhQ,#lJflx7VbvtS/^];vBu=7L]$0Kjuh63^w#!It-m%Y.<cXAEI}a<?' );
define( 'SECURE_AUTH_SALT', 'A1V{!3U+hwE7eezaIA%VNW8R9sj{M;4i=YVe;6u@_sh[N0EeZ<hFd96WaRm,lKSs' );
define( 'LOGGED_IN_SALT',   '&aIIs3:s$db}qlyqIMc,Dy!br8c}lB^GyKT]RC#/o2W[gR{`^`$% w=YWC]A0sAM' );
define( 'NONCE_SALT',       ']3Sic)=Y^]Qg c!?TH|BD>;BnL`a:i*#mi)tHO0UH*/!1,X}grL0}WL_OxVafm-0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ra_';

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
