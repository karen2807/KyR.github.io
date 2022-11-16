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
define( 'DB_NAME', 'kyr' );

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
define( 'AUTH_KEY',         '5`YR-Sn=:sNF5$2?t37$z=p;B/J#;AOOlkEJO5tb:|HuI-k{`OJ&X@q]S%zYKrb4' );
define( 'SECURE_AUTH_KEY',  'UXBFB.RM+p$9=<^U,US}T5e$>-fAdeufvj a(*0(}myF&wPD9ES{LOqaP/u2lsi>' );
define( 'LOGGED_IN_KEY',    'cD9mn.:IL[j-5]vId@p7<ku]_X6=WzwLzd&>Os7d0#nlQ>Y@gQ9t/8P(.`aJZ-g8' );
define( 'NONCE_KEY',        '`#{3Rn1bGrz.l#I~WhPHB^#$7qPH?qElj&qm: hjRYc/#Q;2JNttXX$NUt<ZpFJ~' );
define( 'AUTH_SALT',        '@xdP1+6!!~]`cyP0eY&ES{1u/aNAy3PF2cxzrjI`_Mv*_S?Y8))u3#o+;056~?MR' );
define( 'SECURE_AUTH_SALT', '[`P:?][$@]WkUgC,wyC[BV]muVt7kLZ c+;]Ej/:!h_fm45a%%O]A+u!IM1NZj&a' );
define( 'LOGGED_IN_SALT',   '%%ZqeIK-JLW/!bns}&,im9ukBVIqFHipTu^;[GxIFrP/5q&L] MfI%vDsj{7;EBI' );
define( 'NONCE_SALT',       'yP{ky4rq=XZ)2`V.{RN]R(W7aM4IwtO2Q<ahiMUD,qkoiu,c,p)Vs9kXo)DD.)50' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
