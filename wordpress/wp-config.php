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
// define( 'DB_NAME', 'wp' );

// /** Database username */
// define( 'DB_USER', 'wp' );

// /** Database password */
// define( 'DB_PASSWORD', 'secret' );

// /** Database hostname */
// define( 'DB_HOST', 'mysql' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );

// /**#@+
//  * Authentication unique keys and salts.
//  *
//  * Change these to different unique phrases! You can generate these using
//  * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
//  *
//  * You can change these at any point in time to invalidate all existing cookies.
//  * This will force all users to have to log in again.
//  *
//  * @since 2.6.0
//  */
// define( 'AUTH_KEY',         'GDb_+JP<Q ,A^iD|BqSC5~f4Ufi=j+L$IZK^mu?+[^^FT,}@03:z8C43[n0*YB:_' );
// define( 'SECURE_AUTH_KEY',  '@b)_dXL=Co5VDzhIy$YZq9<H?@As3I2;*P^5rR1TH4;{jm.}6}4} [_gIHWjf%??' );
// define( 'LOGGED_IN_KEY',    '.a]U;9R{50Vx<$eS!iBuo$>DAKEIX+L-1j0rY);>2Cv_GLP3H(YD/Mf`Dfg6##Q)' );
// define( 'NONCE_KEY',        'oM{%[e^gS=|xs)[+?-E*V&A~|p= )(`]a&&,Oe-!kd>uz@}`~kO|?QMr(S/$*(TI' );
// define( 'AUTH_SALT',        'k8r,tg3yX4{>8HT`1KV46G%HCs4_TYm/S@d2`3[!)>?kzczw*|[*u0,x2k!0p4]s' );
// define( 'SECURE_AUTH_SALT', 'scoq2zERBiAgyN9Uo2:S4fxt-aJGn]m&D+}kT%l2Vv1,_(AX.5l;cj%XmYmS#=(n' );
// define( 'LOGGED_IN_SALT',   'ma y.J6*CwAn.82+z)L}<.B#x4GT4qH6fkEYXq<C6v!zmF<2dYE~pH9aHIJ-Q)Hw' );
// define( 'NONCE_SALT',       '|Tb]IT9~r1_|9>weLs.~prw.yxO&9T3@T;ix@l+|dL7AV>T/PR|]2bHK+HL)Qv=O' );

// /**#@-*/

// /**
//  * WordPress database table prefix.
//  *
//  * You can have multiple installations in one database if you give each
//  * a unique prefix. Only numbers, letters, and underscores please!
//  */
// $table_prefix = 'wp_';

// /**
//  * For developers: WordPress debugging mode.
//  *
//  * Change this to true to enable the display of notices during development.
//  * It is strongly recommended that plugin and theme developers use WP_DEBUG
//  * in their development environments.
//  *
//  * For information on other constants that can be used for debugging,
//  * visit the documentation.
//  *
//  * @link https://wordpress.org/support/article/debugging-in-wordpress/
//  */
// define( 'WP_DEBUG', false );

// /* Add any custom values between this line and the "stop editing" line. */



// /* That's all, stop editing! Happy publishing. */

// /** Absolute path to the WordPress directory. */
// if ( ! defined( 'ABSPATH' ) ) {
// 	define( 'ABSPATH', __DIR__ . '/' );
// }

// /** Sets up WordPress vars and included files. */
// require_once ABSPATH . 'wp-settings.php';
















/**
 * The base configuration for WordPress.
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
 * @package awps
 */

/**
 * Include Dotenv library to pull config options from .env file.
 */
if ( file_exists( __DIR__ . '/wp-content/themes/awps/vendor/autoload.php' ) ) :
	require_once __DIR__ . '/wp-content/themes/awps/vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ );
	$dotenv->load();
endif;

if ( file_exists( dirname( __DIR__ ) . '/wp-content/themes/awps/vendor/autoload.php' ) ) :
	require_once dirname( __DIR__ ) . '/wp-content/themes/awps/vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable( dirname( __DIR__ ) );
	$dotenv->load();
endif;

/** MySQL settings - You can get this info from your web host
 * The name of the database for WordPress
 */

define( 'DB_NAME', $_ENV[ 'DB_NAME' ] );

/* MySQL database username */
define( 'DB_USER', $_ENV[ 'DB_USER' ] );

/* MySQL database password */
define( 'DB_PASSWORD', $_ENV[ 'DB_PASSWORD' ] );

/* MySQL hostname */
define( 'DB_HOST', $_ENV[ 'DB_HOST' ] );

/* Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/* The Database Collate type. Don't change this if in doubt. */
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

define( 'AUTH_KEY',         'GDb_+JP<Q ,A^iD|BqSC5~f4Ufi=j+L$IZK^mu?+[^^FT,}@03:z8C43[n0*YB:_' );
define( 'SECURE_AUTH_KEY',  '@b)_dXL=Co5VDzhIy$YZq9<H?@As3I2;*P^5rR1TH4;{jm.}6}4} [_gIHWjf%??' );
define( 'LOGGED_IN_KEY',    '.a]U;9R{50Vx<$eS!iBuo$>DAKEIX+L-1j0rY);>2Cv_GLP3H(YD/Mf`Dfg6##Q)' );
define( 'NONCE_KEY',        'oM{%[e^gS=|xs)[+?-E*V&A~|p= )(`]a&&,Oe-!kd>uz@}`~kO|?QMr(S/$*(TI' );
define( 'AUTH_SALT',        'k8r,tg3yX4{>8HT`1KV46G%HCs4_TYm/S@d2`3[!)>?kzczw*|[*u0,x2k!0p4]s' );
define( 'SECURE_AUTH_SALT', 'scoq2zERBiAgyN9Uo2:S4fxt-aJGn]m&D+}kT%l2Vv1,_(AX.5l;cj%XmYmS#=(n' );
define( 'LOGGED_IN_SALT',   'ma y.J6*CwAn.82+z)L}<.B#x4GT4qH6fkEYXq<C6v!zmF<2dYE~pH9aHIJ-Q)Hw' );
define( 'NONCE_SALT',       '|Tb]IT9~r1_|9>weLs.~prw.yxO&9T3@T;ix@l+|dL7AV>T/PR|]2bHK+HL)Qv=O' );


/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

$table_prefix = $_ENV[ 'DB_PREFIX' ];

/*
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

define( 'WP_DEBUG', $_ENV[ 'APP_ENV' ] === 'development' ? true : false );
define( 'JETPACK_DEV_DEBUG', $_ENV[ 'APP_ENV' ] === 'development' ? true : false );
define( 'WPCF7_AUTOP', $_ENV[ 'WPCF7_AUTOP' ] );
define( 'FS_METHOD', 'direct' );

/**
 * Define home and site url
 * reduces DB calls and increase performance
 */

define( 'WP_HOME', $_ENV[ 'WP_HOME' ] );
define( 'WP_SITEURL', $_ENV[ 'WP_SITEURL' ] );

/**
 * Manage Post revisions and autosave
 */

define( 'AUTOSAVE_INTERVAL', $_ENV[ 'AUTOSAVE_INTERVAL' ] );
define( 'WP_POST_REVISIONS', $_ENV[ 'WP_POST_REVISIONS' ] );

/**
 * Manage Trash auto empty
 */

define( 'EMPTY_TRASH_DAYS', $_ENV[ 'EMPTY_TRASH_DAYS' ] );

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) :
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
endif;

/* Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';
