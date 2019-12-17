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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'KZfHEziIgIFt+rTRMIML2JQPJUY0A7uuiwQZ57jNfKTz68E6eTzyrpXx7rHH10vnaDs32ozlg/o7yRFKdWUq2Q==');
define('SECURE_AUTH_KEY',  'l2ax/RECKrQ5YJoCSncXkNw5m+4XcyWkdMap8MipMAp3bLL7s7w7tWn0sgThnr7gwo86+CLCi6nyDVlG1AFbqw==');
define('LOGGED_IN_KEY',    'ND1hmR7TS6amOez74Lt1mpq5JPuw95niooElgmeH1a4Se/wCbB4fxfd6QHdj5jyvEQfBZuJ3dKoeFYcqd5Nw5g==');
define('NONCE_KEY',        'tlBU4bOzzY/LwJgaO1d779C/Q5NB5680pj3qVIrZtT//1Hw3M6RsdeDyZEVlF43CA3iVb4iCjl7JDKE1IJvCVA==');
define('AUTH_SALT',        'IYSdOgH8uEVtE2KIJxaH1cLgdXYf3VGO7NoG2Fs/J3FlOSf0jy73vASBH/qaFHEsjmwbiMl+d6bJR70pvYTGSw==');
define('SECURE_AUTH_SALT', '9apXcJwHeb5IFMtkUzPGtOoVcTiLfuUYbycMO7nb5F0KOgxyWadLyEpG/wRsRqtXryWrytJqJZh4p/7VaBZegA==');
define('LOGGED_IN_SALT',   'EF3SBHr9IL2Yi6WuzIJHUm5yQI1zCBDlnwBX5dk6TysCRqIRfRz+XIYvqZt1D3XzsHy6hb63OcreOF9n+ScxoQ==');
define('NONCE_SALT',       '1DUOXBqSrqfrChyctSrVnEJSE+bST2aTve1xl0yr+gWXPwnjvxLLf4IxA+FjtbGcmXlAJ4PyUqO375dok0Y4ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
