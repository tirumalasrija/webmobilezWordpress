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
define( 'DB_NAME', 'webmobi5_89e' );

/** MySQL database username */
define( 'DB_USER', 'webmobi5_89e' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FE1C5BD8Adqb0a2c4wg6vr9k3' );

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
define( 'AUTH_KEY',         '_e#`*pf~d XJh7!~h/;,dup!3iC<_WhENGYszIw=B`|j#<|oFD-3z/6VHzealC@N' );
define( 'SECURE_AUTH_KEY',  'z{<cG{PzW`/sT[%=,oU=: 302V:z66anxP*`fEc?pc&:<m2GOf4$Cey<+Ala?$>]' );
define( 'LOGGED_IN_KEY',    'r4Ek]j8B%3<8UVk)Qg?)%d7ef[C{wTP>LyxkuzG(Zv&q.OW-Dv5Ojns<*U&tKqNG' );
define( 'NONCE_KEY',        ':D39TXqa]sI^)MJvPCs~wc&B0=@0/*0.Ukfp>/ZoN$7r80#bJ>JC@Ea~8wmty@L?' );
define( 'AUTH_SALT',        'd5X:idBHE(pT$iF>*#=Vsks/[#`R6Dan{YZ)Xb(0jKrv+SRz6D:gEtm+Aqw2I#G7' );
define( 'SECURE_AUTH_SALT', '+P=?z/P;10=+Yvgc1;I^T+lb1tgBAqY;<1o,=1dgkX)2JY1]XzVQF|3Z03Z@Rkz(' );
define( 'LOGGED_IN_SALT',   'cJT2|zD0?BcP9_c!xA;S0i~<P:)_vFRact2 eoMhPo%ZT[ZoXp/0OFLw,D{+wr_k' );
define( 'NONCE_SALT',       'BiIw3+ O_S>3Glxvl_vAb3spTM2k>,k!$94$G)EO4ED?7vMU+&`0HKzy+O<k&EPL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '89e_';

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
