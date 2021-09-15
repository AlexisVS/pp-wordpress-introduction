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
define('DB_NAME', 'wordpress-introduction');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!defined('WP_CLI')) {
    define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
}



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
define('AUTH_KEY',         '6ecGiElQau41gNswr3Pa7ASydeTHVKjxDYVr897NxlDDUb5B4iAVl5PRBWd5WPPX');
define('SECURE_AUTH_KEY',  'Pc38xlCB8HQJQhp6cCBRi16D5iX6csFMUEwajzUpMDKTCLEnUlD5wdApo1HSH4Lt');
define('LOGGED_IN_KEY',    'rjA2qJyN9hu2HTXcKztfdX7TVrUC0R1UjQMjgcLGW47BkOGP2Ol8SjycmvTfLfOm');
define('NONCE_KEY',        'qPivkbCM7Jhn08PPinhecql3qQfz2dZxslY8j3Lx4l4THzcSni5FZ0KVplGP7Z8G');
define('AUTH_SALT',        'HO7DPshEw6B7wjO5SR5xvMTTruCKZoYHjdZAVjutaPGjPdB1aqDujg9OF64vBfUE');
define('SECURE_AUTH_SALT', 'oM3GyYOcvZjQvnIi1GRZtkrrYn5yS047pwJOi4rrEILhHGx30kDicuCGxNMBTqad');
define('LOGGED_IN_SALT',   'H978dBi2H1BejNo9tATvBvpxuwcQN25bTptjWlymR1AyAyR9TtBNByJgTOAm4xIW');
define('NONCE_SALT',       'D61YQaD4Y0KxvAKsWB1pG00KloWHNXrLD1i8wpvI8rPgNJHCnDyNgSCWatNUX7Yd');

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
define('WP_DEBUG', true);
define('SAVEQUERIES', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
