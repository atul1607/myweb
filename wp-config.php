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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'GYD4j(>_yqX&a&J[M]Z;X]Z;|P5x9KlghIa%ge.!W5O=Xl!fc0GpP>QeG)7)?Lt#' );
define( 'SECURE_AUTH_KEY',  '5*H9|};u+yUA[jf]a;K&}m/?]N{a*Upjwv?0S2Ve@L}M1]Ry=%UQ(2LV`3#Ij7U{' );
define( 'LOGGED_IN_KEY',    'DNsf-0txPunE2{${8!s$BvP+{<$STdiF>l6PO,R_suJ-rL7:d-nn~eZ:>2wNS-9[' );
define( 'NONCE_KEY',        'W/QAJfT<lDSn]e3ad;}>eM1pKYnjy`aN<T#sO(vUsM/gahz/NtB6.}/:(uS.a7Rd' );
define( 'AUTH_SALT',        '? TcNLkmV)6Gr@?jCXz{g4P.bKa-pmrw(mjmqHm$ss_PGNA[ /(X;+j^Nm[BOr4u' );
define( 'SECURE_AUTH_SALT', '>WQg~d,xYV9EfYB`mgkFDZi_aI^{1Ql})CYWYW=89&PFj5_#WvWGP#owg9X&G^lH' );
define( 'LOGGED_IN_SALT',   '>w+(TdwjZ`AOh=M^8R=(]M@?XH|41GB)et2Qh(=CQ.V1ilC#yw%%1H/.W9[r4WuE' );
define( 'NONCE_SALT',       '&/T=!co $W~)YYcs!IfQsGOrh|%bbQ-S&hv?QNCs.QsEUi^X?|XKiz%i=zgS^X-s' );

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
