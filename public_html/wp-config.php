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
define( 'DB_NAME', '1235-20_eda' );

/** Database username */
define( 'DB_USER', '1235-20_wpadmin' );

/** Database password */
define( 'DB_PASSWORD', 'aee3ba99ea4b950c5d09' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'WtF]_,O5R@NABT&W]Q7y<(JPn4pP3e&7H*!h:%D6b6dxr[}~D98Ge*=0DZ5pulG3' );
define( 'SECURE_AUTH_KEY',  '`MpdW$K3xn]IUw0Wj!n9A]_ J}Cx(;zwc4_Dk*G@!x}%PqbtEIN$lCX#js&e }Hy' );
define( 'LOGGED_IN_KEY',    '{>V3h#q`,]Y8bj0WGDu9-K87:3*T7E-wyR;N5nD8hCIjGip6x>yL|H=qw/{}(%' );
define( 'NONCE_KEY',        'rnb|+@:ux7So@Ys4YJ:~;Ky**t{L=;@y2Ek=-6J_VebdszxK `I-Fc5rR}Iyjr)T' );
define( 'AUTH_SALT',        'ym,dxdRE3#i]_@SzAz2#lH0G/.P3P|8?}OXtYz)}Au~TVOfrzvv6]$B>X0a#FrDG' );
define( 'SECURE_AUTH_SALT', 'R{jHp-&> mkwz!!aaF0=i;qi%7=e[Kj0Th/T@~NP<lyWE[:Bo :Jm:J;kLIO:^' );
define( 'LOGGED_IN_SALT',   'VRK9lFMx##D|gIK tC ;@Y<ahdj}g2trq-bv7Xg}mJBTj5OW8cL; U)^+dJu$$:C' );
define( 'NONCE_SALT',       'mWbV<Pf1D|6fB Z}*mYSlrFr{s% _EZUiY.Ag5Z^[&UX.?RU}ASHht?7kqz:y]rV' );

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