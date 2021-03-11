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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '# %%R$dD.ZZov}y<GJ}TMSHup|]I2h> ^iOBdOWPg=HO~Csh|F#jA;qw?3=rS6sP' );
define( 'SECURE_AUTH_KEY',  'w>1Z@cX}fGS=T6`2tXi>#HSdC=X?Nd6*niM8HEnW`.qV<joQT^v)6T6L=bdPS^ ,' );
define( 'LOGGED_IN_KEY',    'f[&Hn+GEP#0g/%s_CZwy6(+7dd^b~n]Z{wJVii*Dm^iEz9XH2F~$I7S.4OG%h?up' );
define( 'NONCE_KEY',        'kt{vZ#?67cr*@+xBP{qBxb}2fo!c_ad~KRgKmsh+>62hF:h=u3j#8|l9_Ctm<H0@' );
define( 'AUTH_SALT',        'e]Uw;R}9B^;8Wf9Ca,1^6Qd}O:@$w,^q*IHkuI?DYc)qm`l7 rk{LSDO)AnjwJf]' );
define( 'SECURE_AUTH_SALT', 'W>M zNRP*74(DZoVeHT@iQ^i_PV(ph^=T/$I3[MT+ 4o`o2-7`7<@p^_O0:?-aVx' );
define( 'LOGGED_IN_SALT',   'KW(aq2ZwvYrWSz4MO @|R:->K$.LRPEfFTrlXT=[Wu)ZO}>,mYf=98}d@GMmU#$[' );
define( 'NONCE_SALT',       '}$W+_;eoYeYTk{0|t#sFsul$gD2-t1P15@AtHKt@=q}7m]?J^752q0KM${|VO!o2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
