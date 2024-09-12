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
define( 'DB_NAME', 'infinitytrnder' );

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
define( 'AUTH_KEY',         '2Ky#AhKEcLRr/|5k*#RH7Nv6tr_l>P9JR0bAR[PPo`|H,(G33Bz-JZ_WZfEv!cdp' );
define( 'SECURE_AUTH_KEY',  '@fF5&qE7Wkw[7z:X;8#!Q*Y!L1*f ]GyyFDq^:ch5gSW830<(;:t4zUx1iQ`0TrS' );
define( 'LOGGED_IN_KEY',    ':OPTL+9;&:TYjazg%T9^ShA*n}ti1T &h7i,i$b.8&);iF >wrtTu{Y;++H5y!yO' );
define( 'NONCE_KEY',        'QTF5VDcSct+UaVAxx*%M~ofg{d59}Ei{^emp9APVOp{%wJ Ekie4Vzou+,ofNqzO' );
define( 'AUTH_SALT',        'KN3)>x)E^_{p32#QWJo9XRb@2Agoo{=/}&A)MpF^5w?-:$0d{nAz2S@+k1|R7-kd' );
define( 'SECURE_AUTH_SALT', 'EQ,4g*vJN#mpa<$!I>f_Q]%%WB0^v7?w=2zws?}EoxlX1.iyhyFSoGohu.mBW>=i' );
define( 'LOGGED_IN_SALT',   'o1Gs`we4,AwpGNxwiokd)!a,>]^b-w$NdrN|#KyQTZzD W6KafZgg}{~Se&cw*~h' );
define( 'NONCE_SALT',       ' 48C[ScoY_4YZnEL?SlAoFpZJ|twk`mQ75vg^s*_V-!`lDBJHO;k_Yt-sHZ_tkAi' );

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
