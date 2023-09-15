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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jangtruongpr33' );

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
define( 'AUTH_KEY',         'Qb0+/ou.$y%]rR 05rsv`J(r7P`S#*wp(13Wrv~:3;N(rzU:.9cXFq$]pjs>KQPj' );
define( 'SECURE_AUTH_KEY',  '<+*kW@yIwZh{!TCGghXes$*6YEfV,8ar.%118?DJc9^v!>dd]T<QA]b=AZ3}$!sJ' );
define( 'LOGGED_IN_KEY',    '|J@Xv~kL+K?s&w{!N[z#5(OxBr4[ocXuOobCZJx`mjiTZo)x$X?=g;mP=Y9{.&lx' );
define( 'NONCE_KEY',        'Ok`H,Gf`;.DxHkc@E^d/VUVkX1a-(LV0;^M;D<?eE1PrbuYM1:[*(V25, JfogFz' );
define( 'AUTH_SALT',        '#?I;yS5l^&^A?<}O-sCN%hKZ~GsUE`[czjN]l1L=$.<Ux*8W]/<=$d_<@D.> #.i' );
define( 'SECURE_AUTH_SALT', '~1 b;{eNF1yeTD88S%vW:11N.T#I{gth;@3Wv-XJb8=^[iY,lV/^E1-R=x#9s=U&' );
define( 'LOGGED_IN_SALT',   'fiKGfId7xQ;/CTKo?-v9 w I0OP$Epw%?rzh3%K1N(^Ma9#!)):fhK,YFNyG4?*j' );
define( 'NONCE_SALT',       'aEPWziqF9zm[q%)eY`$$T%9Zk<:Y@huls2MiQ{YhfCe[5e(g+gLKs^otdY58tG=o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
