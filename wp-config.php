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
 * * Database table prefix test
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webmobi5_89e' );

/** MySQL database username */
define( 'DB_USER', 'webmobi5_89e' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FE1C5BD8Adqb0a2c4wg6vr9k3' );
/** MySQL database password */
//define( 'DB_PASSWORD', 'FE1C5BD8Adqb0a2c4wg6vr9k3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '|(>_8 8yX%@=T%U}3bDVMF2kHxRib/=|gIktQwX$5GpEHbQ`KlO96<%9o&jA3@Yr' );
define( 'SECURE_AUTH_KEY',   '(R$2yrrc;wN`F:,}$sGWXuDVyBS[QAiWjq-OteW.+!e|(reX8EjoErm<N0Iq!+%v' );
define( 'LOGGED_IN_KEY',     '#uBtONo6qr?FgE*@3|NjL/TUXVC%B>lZn@HB#PSFDC6w:^.RU9Mzd<e<70Eb<.AB' );
define( 'NONCE_KEY',         'F~Dph5rYd$gyDXFuwE(_CFUV%t&6D>C]c,iL(R=lu?-Uf(udIBIK^Qri3eS<,HpC' );
define( 'AUTH_SALT',         'imlXzPp9R2/M-kUeo^QY/`dQM|L&{PVf^^CMTON,swM{f]-l2XGodhsynEP&6VX2' );
define( 'SECURE_AUTH_SALT',  '4h<[*9$m]P/3;e0}$_G+*z~8%R67T8!|@g4pO9 k((G9a6XZ]<1NFQ{/sT@n;Oi6' );
define( 'LOGGED_IN_SALT',    'e,s>g^,z|-!vu]CX3UEwGP@go!fy@|{,xHP&;./OCzTM,W)82CVQ#~}_qeaWAUH~' );
define( 'NONCE_SALT',        'IAm%!6.,_%JCrM$#T)YiA~}:o,SZkRvA+_HIceF1rtbn/Zbb[69[em%}iF!<Zx$$' );
define( 'WP_CACHE_KEY_SALT', 'K%,_4Nkd>f!h[0Hw]dHr%Tuw^FwcWcdO;BKBj,[~$c*B}lGBuv/OHK?tg?(h3nh(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '89e_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
