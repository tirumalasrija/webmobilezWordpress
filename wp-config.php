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
define( 'DB_NAME', 'webmobi5_mobile' );

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
define( 'AUTH_KEY',         ')h./Zs[y7SphRBj,<n(MY+(Vm!|A%iyJO6C]3QZQUR-Fs7G%V>^be27xb&U/WP9T' );
define( 'SECURE_AUTH_KEY',  '*X{?&Pzc}!/[*l_J6))H{x^bnuI-,ub^k.nyt1BTy)Ek|6*p(jK3{Ev5XPTAz1py' );
define( 'LOGGED_IN_KEY',    '}#dSO4h&N(?13qi/P~),,DpHzN>~LS|Q+j_al80]LpMk?M?Cvh;OT#9DJxS~8n!a' );
define( 'NONCE_KEY',        'FYhEjLk 4o]sq0_$U:<E&VasGXqQEoR~gBJmt}3GyM<^OqvytE@4krN]i%oo*Q>J' );
define( 'AUTH_SALT',        'I^1H+{x~AHA:Fy-u!7nw9u^X`m;?;)c%kA(9:UkpW(n2~1FOyEnVkVLYfg9@s?% ' );
define( 'SECURE_AUTH_SALT', 'AB,3y<({_q*_{0/X3^paf=COE*-d6YQahnaHI#43AJys7D]CO5/@.Mb|MPY)i.R%' );
define( 'LOGGED_IN_SALT',   '%/2Gg2:D^J[gwsGF(BrYFW3G=vU.l{]D =n(lh6;5J8=exlEOavL!+_p`[y.4Y~+' );
define( 'NONCE_SALT',       ']3|>dB)S2ugDG,qhrG5f{zFOl)8S2q;PxoYF$p20l(,~Lgp4jTd7R{R;p%w6jo0q' );

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
