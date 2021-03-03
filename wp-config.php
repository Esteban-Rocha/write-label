<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define( 'DB_NAME', 'writelabel');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'root');

/** MySQL hostname */
define( 'DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

define( 'WP_HOME', 'http://127.0.0.1' );
define( 'WP_SITEURL', 'http://127.0.0.1' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rox5vpx15p9tcerxpajltli4onvt4jrbws3p8kf5iib49dieqwiowqtumng3pugg' );
define( 'SECURE_AUTH_KEY',  'lkwzfnefmgy579o40zs8wvdcezcnjk3y7xfck1mvfgwisu05rnwyeetj9or96yzg' );
define( 'LOGGED_IN_KEY',    'jth881pb8pjswmaxzzittsc2wv5fifje1jyka3pd4wckolbzkeshermkqlw73dnh' );
define( 'NONCE_KEY',        'hjqxavjdb2aeaiy0v4psqyzbsoz7irwxkvjsyhfearkvrbvo4bxhpdvubj1uc44j' );
define( 'AUTH_SALT',        'dpi9hmmbim0fmamov7rlyy4kymobljsjnmodr8plvhf1ncmrrdu19golqiqog3vz' );
define( 'SECURE_AUTH_SALT', 'w49cmlqdqqbrb43fdsw8skzj5xqg3iyyxh6yxskhav80ndn6ycspw2pdbfnuc5vg' );
define( 'LOGGED_IN_SALT',   'pfjuxhg0xuvefgzoofvvoc9gzjthjf6um4blbyruxeea1xiudlpzggluxdqaslev' );
define( 'NONCE_SALT',       'gmsjbeoygwe13kzl05trg4u5e8ldkkiz0eqlzneaqw0geoclaurr32few3meigpa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
