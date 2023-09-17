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


define('AUTH_KEY',         '3NZaoWP7ZvHODenA7q+mWRco7U743sNMQaZzAGz/ZxE2GEl/sqlVPVEwbAdKADTZ0cW43LvXBWSzH8BxeWXHGA==');
define('SECURE_AUTH_KEY',  'fDl7ZyrFfsLSh4tzCoNM7M67xhIf1ol8OdpLJzYr2oEp01AMn6pKf1Ve8LOWMLJsf2SUH551DCyjzIl5Wo33uQ==');
define('LOGGED_IN_KEY',    'I9XGfgevFgd6f3KoWVJOFwNpy9BCju8Rp/zboAotScFmHr0pNPqAfIB5s2AjByVMsgQXlNGXRxSTsQPhALFy+A==');
define('NONCE_KEY',        'yfCr24lfbRToqqO6E79owhmzfe4GKReNNju1d1AnxyJh/l3K6SBHGoUBJUoXODlGucGD2NTonsQvjIUbv1EMZg==');
define('AUTH_SALT',        'LalWc63nKYFmALSzs8CNDJ60giXQ68Pm5abZ0PlUgg+qgA6X/+GY41BFT1hp8jTxLEd4i8eYofgqbKd4+Gi93w==');
define('SECURE_AUTH_SALT', 'xSxfYIb+e14DSTJbHXO1knPbVt+SYkrKIoZjOVQDTibF5zn0Vc15SuFHtvfqigX07zeLAmy9qyCmX6IdFdYM/A==');
define('LOGGED_IN_SALT',   'rHFDootZ33BTX3OPRDPziWj50lvyOIlSsEKLBl7eOSEOtNmAiHYMwA/gEa182eK0rhub3kFoAU8DEZWRQgEQLA==');
define('NONCE_SALT',       'GMjJAbarZU9SC1iTVKpmmhILtJhvbjexjLg6djVfUdbYvj5CJyKYL8Uinr3xBWPD6VuTQEt3OQ28h0nQFw9oGA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
