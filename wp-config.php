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
define( 'DB_NAME', 'mehmood' );

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
define( 'AUTH_KEY',         '.9Zg(l]N$(p+4~L&`&>O6`$kBV`{@|22L2Qe=]x?N3h`SpB_V?NHtR3X;QH2-/Z)' );
define( 'SECURE_AUTH_KEY',  '6}DSo}OT<0OoM,c`=F_p/ *^y3>l 9!3Hw[#m`:7l p|9$in:n<z)NRKf]4l&-n3' );
define( 'LOGGED_IN_KEY',    '[ wClk=E2;wkuTZ<kGaB,}$z(OL%j)N|}G|rTbqi8^>QSwgy@w_48~DPJ#HNyV^Z' );
define( 'NONCE_KEY',        'f?_m{dmYx~(L`zepEhwsBZ8BDH&yDKxk9aclKF#_yhsOA+<H_w:Ot[C5(]b-bivG' );
define( 'AUTH_SALT',        '~<y=nTUKX+Md2lmPqsuS3.hUh/k+A=`nggVp@bq9gO~s6Y`6[iietK+Uh51pq,k`' );
define( 'SECURE_AUTH_SALT', ':-R;a^du:=Q;ap?;Iq^z}8FHm_hm|V}*l3l.PSo5x]Ztc$g6S0aIHIB<+%;h{pXx' );
define( 'LOGGED_IN_SALT',   'suRQ;OfK559sq54*Wd-Lfo2@MTwweKeEa<AK $5HRh/ao( !jIUxk[]K(SI-uxAd' );
define( 'NONCE_SALT',       '+o}Gi!fX7#OjcZP!z4S=&TK$(==ngY+1V.U+ZwJ%qVY.?9Sg(SNA2n2s9r{_e>v{' );

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
