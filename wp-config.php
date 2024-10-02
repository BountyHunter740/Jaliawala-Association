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
define( 'DB_NAME', 'jaliawala-association' );

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
define( 'AUTH_KEY',         '{`P/8_@(I?X_%pBqj=/O[I4;ir(bWL5JJu=.G(v%YRyVZgbDr&;x{--|!.0mQuQ$' );
define( 'SECURE_AUTH_KEY',  'K1Mb`oynMy+zSzjwmvHDs]LD=6;yFzj8-vM6E8msFG$Xo]#ACHC!ONDufA=_u1Sj' );
define( 'LOGGED_IN_KEY',    'kS85^[/]B35=g}v&w#+}QuWurzzP!dTM1[n gnV7nlRj`bvQX3!(>tSqq6^8;prg' );
define( 'NONCE_KEY',        '}i$ER<CX[hF.1%lNL-25x2o+N1h.T)dm- HA]xD_^v<+Dg#Z(&WByq(PztoG;tn-' );
define( 'AUTH_SALT',        ';gg`FJ33!_-ycJ&yCo?WnGvk;|N7AtwnG:V!v0xODTp-T4P<wC;ciKf.,tJ)7k6m' );
define( 'SECURE_AUTH_SALT', 'ViKGRQ>*hke?[bL)safK60=inW%CZNh$@YYM#0T64f+Hd&O(4@>xiX,6^RLI/@u(' );
define( 'LOGGED_IN_SALT',   'D2/PF7%l03j]b!*P<};`)V`,hQ3}0s]1O/!+=F8vE%UgJ8/z{O8p+4XRp4F(i]:o' );
define( 'NONCE_SALT',       'x74GtShP;3g;}NEH[yN2k9/g(>9L/zQ@1xRs=aeYC<sFxdk#%E@M/EomaIK#Ac#R' );

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
