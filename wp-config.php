<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

$DBurl = parse_url(getenv("CLEARDB_DATABASE_URL"));

$DBhost = $DBurl["host"];
$DBusername = $DBurl["user"];
$DBpassword = $DBurl["pass"];
$DBname = substr($DBurl["path"], 1);

define('DB_NAME', $DBname);
define('DB_USER', $DBusername);
define('DB_PASSWORD', $DBpassword);
define('DB_HOST', $DBhost);

define( 'AMAZON_KEY', getenv('AWS_ACCESS_KEY_ID') );
define( 'AMAZON_SECRET', getenv('AWS_SECRET_ACCESS_KEY') );
define( 'AWS_ACCESS_KEY_ID', getenv('AWS_ACCESS_KEY_ID') );
define( 'AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY') );
define( 'AS3CF_BUCKET', getenv('AMAZON_BUCKET'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * WordPress SMTP server
 */
define('WP_SMTP_HOST',       'smtp.sendgrid.net');
define('WP_SMTP_PORT',       25);                   // obligatory - default: 25
define('WP_SMTP_ENCRYPTION', 'tls');                // obligatory: 'tls' or 'ssl' - default: no encryption
define('WP_SMTP_USER',       getenv('SENDGRID_USERNAME'));           // obligatory - default: no user
define('WP_SMTP_PASSWORD',   getenv('SENDGRID_PASSWORD'));           // obligatory - default: no password

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

