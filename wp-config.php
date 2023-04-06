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
define( 'DB_NAME', 'dbholaworld' );

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
define( 'AUTH_KEY',         '4&0OypG 6_:Xhv!BX *$.kVWxFp48]y,?Q`_l}D):our3d&Z1WmKJu^~B`<~iTA?' );
define( 'SECURE_AUTH_KEY',  '6vQ00VBWp>EVkeF;CQ=G#&&y}P<Y7 j[k[&sklj`3op=jHNl]:9iP_tMB}wMYf}F' );
define( 'LOGGED_IN_KEY',    'K^;MMP{6.pmQ*a}Zl06@UJj8u8BY3T kbj<Q%r&G|x9&5w<D7oyb4)E%YC3cG18h' );
define( 'NONCE_KEY',        '. BB%;El`wXAqExkPK/uFZrYTLatHE4JIK0)G^}2_>`E}2a9Rgyl~1.KGxhz^FJN' );
define( 'AUTH_SALT',        ' 7n?kZyjy9gBvT:x4v%wV.Mxq2`?#[>Wu?,,h]ll3!7/<TBMBPai5Y|[(- 7Y`6Q' );
define( 'SECURE_AUTH_SALT', 'D9ojg<svdiOQ2OIK+;,;mM_@GY10PIeL)>!Xt+y9!hD]#pW`ey&kkNbP>3H:ZlFc' );
define( 'LOGGED_IN_SALT',   '&tG}YzJ>Lc?aUR%UfXJBjwbQaF0#33Y2k@9;>rdR@*JgJ0sTBR0*nv%/%IK,~jXp' );
define( 'NONCE_SALT',       'S(O87g,Qy4K.eOO_5YY0On)kBuK{cUQ?I;k|6[=XZdX+KKT.zo?2V]^HNkkOazw4' );

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
