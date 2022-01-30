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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'z5AP6wR5YtXGNAilXIbe1cuyGpH2ryxudG+z+F9coh/0PDxDI2ShUlj19reWQbtIrfDSj4sy3GU7ADqe2xuJbQ==');
define('SECURE_AUTH_KEY',  'qVudyd6U3kNpyVjmpYizF7DrVv81QWB06Mx1JqtykIhrZu0vQ9DC/i5yBR93+Z1Fj1M/OoSZH02LC4LNEDP/Pg==');
define('LOGGED_IN_KEY',    'FuVI/955RrTDU/jLMwBsdlBfdnDskJHw5BfUsq/nRukEcCDW9PUfT5YHeopnaXotYcrYwIb+t1LuSTy11dIrzw==');
define('NONCE_KEY',        'jKtuWJvg7MEsiKxorHtrl3xjZYesqJjOu142dmjuu1DKIGj3TbOrbDpIzIgc77JSX9aVNBDlUMTzqXQbtptMag==');
define('AUTH_SALT',        '2FiiznK2iq1ByK5cQs2NdrqmOdma///6lrLP4hK93CPkOvIZd7hDzD0L8qx3yPIFN7zpV3sVkj2QAJelMMyKRA==');
define('SECURE_AUTH_SALT', 'J7QeD+m2d53wRpm5+uApgYxUCxRRlY7i0tDH+sZpfWcgzlLfB2Js4GzoYqkl4XFuoSe8n93nOEk7rJXMOATdBQ==');
define('LOGGED_IN_SALT',   'JFYyQmx2HiIGDgXq1v5KAW7uNGl5nc9UEMwz7VPWmEnz24mPNfcDpigoC7UE+OD49U2lWZ/0QhNS/xc4SSovRA==');
define('NONCE_SALT',       'tQJkqC4XCvGI8lljYOlSRd7yQK4Agtc71rQxEGMkYc5TsKR5OssuR6b+XkP2b1/+5BmLPK6MwYqu3+UPlJyIqg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
