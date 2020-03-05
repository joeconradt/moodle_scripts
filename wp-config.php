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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

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
define( 'AUTH_KEY',         'erp! 96|&lr^UMy8;]F!AzSDHwd!I9Wba)$1NI43tLc-!D/337yqf4n8uc})zBwB' );
define( 'SECURE_AUTH_KEY',  '~W$He?24yV(ysg<1/}7Kw.%<!+>}fYJ)=0yKR>=,~8UHTj)l7L9d6*5<Xbi|rSb[' );
define( 'LOGGED_IN_KEY',    '~2M^*fLJXt[w+UE=D<Nc(ja|E;~0M1LWzZG3PZ},rn+>f|ol<L.p&9QIp7o4(}8j' );
define( 'NONCE_KEY',        '9o[4bkXW-9]b:W4 Pube.)is/D^V[kSW~wVqGA>AJ%Kian)~U670/(Gx6=*0w0-c' );
define( 'AUTH_SALT',        'a-zDk__>gCL)],QN;?x?f^>P)pbAy<bCf)1hbd8OcojKsU7~k]`ovq{N9hIm~E_#' );
define( 'SECURE_AUTH_SALT', 's!4Dv)e{x ~%G7S +?{]A{BGVg|zK|]](iQu}$dMt*U/;C0D1jA%aOU<1(WuH,EU' );
define( 'LOGGED_IN_SALT',   'Dhp;%lg>1kYe6;Rq^QJ7zCY} z+o,vG>XPdr;VBA(_/7:vVF/%d%>|45C>sP%%^R' );
define( 'NONCE_SALT',       'T:{TQCrVYNg#nHQ#w}*ZxibOZHD}^E&~gU!W9h TC.<[L]~8#1Bpy>xo=A*] ([D' );

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
