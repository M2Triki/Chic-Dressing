<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'e;(|Edv<-ZLp.<dwJ(<HYtI{*c&f=sjBk#k=aiDB7$# cXf`hwag-N+#;+I3vZE?' );
define( 'SECURE_AUTH_KEY',   'FJZ)*2e^i?8NQg|{[eKie4#=XX|CUDISMm2;O,6n7@Gp^srE2=0@SCY/49]J(=)]' );
define( 'LOGGED_IN_KEY',     '64G]FY$p$rJZunm:?fl28^9PNqK[}-pp$9(LoXVQs=5v/o`&J2-+fP*${1*-C9`H' );
define( 'NONCE_KEY',         'V?-d`W $Ha{;z{:C t)84GRg<T5D*2&+X>i5h#@0*v)(4;X2ngw<:Cl/s!c%h57/' );
define( 'AUTH_SALT',         '=Is]3herOrxEUliehA}{gg/<>J^9&@u_N}46`IQaIx;gSF{T[qp.:gEdu4GF=jYW' );
define( 'SECURE_AUTH_SALT',  'tC-PC`t[OUEEkrKRr/swYLe|Z{5MMw}e:X$,QXT5}v[Nc_uMCPlh$O6X=*2XM>D4' );
define( 'LOGGED_IN_SALT',    'RhTKtGigM>U|saoFDBl2R<2@/Mgy42I0zR&OMPLj*jz)WkeT+`l*~bQ.g1uBmyOs' );
define( 'NONCE_SALT',        'i.vs IfP:@~tRX7Nc:*XKSrj@P*l*6/&6$qhjgBb;BYvl pR|!0)N{El{3%dZiR.' );
define( 'WP_CACHE_KEY_SALT', '$t@MOw8P/8^L8a0:;/<eP~_]qm@+c^v7A<^HNj<6qm2:vR;TK[qL>wOA[=&j<kA)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
