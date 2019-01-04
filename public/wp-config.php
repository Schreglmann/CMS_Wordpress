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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '<V[9RI`#{yq%o51f$3hB}_X&(4pJ..ZY!%_;M+k%cctQ_@icd*cqj@O(f!kV^u.-' );
define( 'SECURE_AUTH_KEY',   '*aQ*z $X=Q/^XMpY%;COu(jWMX0sf;hp1 M1QWNB~wfi/N5u)-eyUOGCCYZb4[u#' );
define( 'LOGGED_IN_KEY',     '&i>/d7[z`VN8i7kOtJ{G8dKOHDMnJ:B*,hD#1P=fCwa [*J]y!YUyI(-~=c!&F|;' );
define( 'NONCE_KEY',         'KC c:k<rWZ=6yQk[kg+pbBB2$0fV7[`z?K|WcE8_Za{-?ocq9&r`Sg|1Nm2(Mfn3' );
define( 'AUTH_SALT',         'f}&&Nqal A^Gn@U9 {CT7&yy:N2MZAb7v|pX7]2OV)pwHLFlb$a?1fSzY`qV(e>J' );
define( 'SECURE_AUTH_SALT',  '{n-I%x!dx$+M1,AnJ,j-,w*Gw&%d1^*Ya{Wv[xL|ODgq5;]]t8|t*$QYLZ }Lw5y' );
define( 'LOGGED_IN_SALT',    '$[Wh&%I11t<RT3,S%52/iz}zVzIU%z}O;Gb_@~#d&HDZi89+z>s@|{==I gG-GYT' );
define( 'NONCE_SALT',        '<3v+a /+T3#l+<N.6f|d;AGxI7b@x_%w4(TI,:K]JowP#>bD^3`9t1/%%@=j46?G' );
define( 'WP_CACHE_KEY_SALT', 'qo|*9:!b&IznI##(*DN!-ko-ac8RVdg49DphS:d4C@+v16+?DcjaZ%{:berR.*{;' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
