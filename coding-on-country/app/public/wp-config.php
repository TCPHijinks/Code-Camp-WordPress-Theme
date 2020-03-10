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
define('AUTH_KEY',         '9RSi/+fdK6ZE2X955hofBSqcNe9KTPfEmBgC0jd0+P8MH2m0MHYfeefw0SUpwfND5mjHTApnHrX35QjkaNLNdg==');
define('SECURE_AUTH_KEY',  'VnKMW56I9s+i8hNaptRQBVie5dIeszJxineXownPF3QpCgBfXKhE0HYTfnu/fA1Fw19KnCbU1SodAap12pQOJQ==');
define('LOGGED_IN_KEY',    'mc+XS/NS3DmKJdKuWZKAMOlKVWQqu+TPfTWkS07HDGnRJVdQVBT41pjOVDm9jkj7mSc6P0t7cF5+k2UCWai4rQ==');
define('NONCE_KEY',        'LWKMTJfnqfWQ1GdfOkZY4PxdFODWM7eE1/noXVQGgL+Q0BK+eZFo5VI3MxFjTDdLhpm40i6HjkKTaVqLh4HqXw==');
define('AUTH_SALT',        'odkCjtgbmxW0WEEkkEZMaqzXUW0TaKPE/XiUtWSgTvRhjd9FaVG7FWjxrHFJOONy6xLw0eRBKNDgA7rHh1qPEQ==');
define('SECURE_AUTH_SALT', 'yQDc8zKLw+J0X7Qf95y9q1TJ8y+h9RGtPOvPD1XAk9XV6ofSBWT4hwOuGd8Ho4pAZD42m9iBgENrfa17+apAlw==');
define('LOGGED_IN_SALT',   'o7gw1biRv8ks34uEJMObJNYPvAG1A5HKgNZfyM3PFxpxEisqN68KKHopob3ohGO8VDL5fnrr1NOAF7o37B9QJg==');
define('NONCE_SALT',       'zNGyjh1v/dVfmYoe1p9raxk5hH4G5tCImDekR8I6ublJ9NtvwM0Jh74EvKWPo3EWVIqkXebIJFxMEMNYe+4XcA==');

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
