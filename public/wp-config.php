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
define('AUTH_KEY',         'iNh3yh0N+YayscD75ra/qiwV60oj4cZS7mBc+rcHh/C7ay73n96KSDqC0UBdOd79Nd/7ccah2BC98lD1qOk1Kg==');
define('SECURE_AUTH_KEY',  'ZWVrM8kIhtaSFNyXE9/gD2IpMiloWIEcmORq9MCQ4+OILQUyu4uAp0qiyvY6Cy9hZ2sDmy2GLDeUnrsSW4cq7Q==');
define('LOGGED_IN_KEY',    'EaNaBymLYAVJMPJtHRHi9UeIYooGb5xUXoMuirqaH5YJ/GMCpbGvrTx4MhjnLKNGaRbKNcVaMvAnT9uAbJFG3A==');
define('NONCE_KEY',        'BcjzCRozo0LtG1MiaM6a8MbrNgarLFGCoCFk2EvRfcJNQD+pLPrYYKc8XxEfU1xcSEcjIhs/Ci4qa5zqUdRynA==');
define('AUTH_SALT',        'h/rqd4AIlJxR4WUxyCpe0GFeqca0T1kfQ6C0oNTeXAF6pk5thhN2h0e0z9DDvMPqABNODyVMaL877wbMIAm2HQ==');
define('SECURE_AUTH_SALT', '1T/VoQOwDnKuFAsATJXF//JAK9ai/PyAQZwyHt/I6Hexw7InBCIoluPjkP30aUtr26ldB2BP3InH/I4tz7lUBQ==');
define('LOGGED_IN_SALT',   'Apv09Lm+vZks2/KjnGoqtJHCmUI6fgJiJFHiirHZeyo9inAo+MKEQV/J6xkU5Chp17OTTEFKWoPw21oDBhgVRg==');
define('NONCE_SALT',       'V3uu/Xking7iHT1StSLTXFbIPFqRu9Fx6grhzxlmizZkG0ARHoozyE8zxPuQx5jRc60eC2ivHbU8fhsO/pn3Kw==');

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
