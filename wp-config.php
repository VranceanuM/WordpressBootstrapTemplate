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
define('DB_NAME', 'wp995');

/** MySQL database username */
define('DB_USER', 'wp995');

/** MySQL database password */
define('DB_PASSWORD', '-1325(SVmP');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5mgxnyntpast72jfqodll6qglqdwgwerblchgg0kz1zk02rmxykkpunlymd9lhti');
define('SECURE_AUTH_KEY',  'bxbqsdayfdflzutodj7pk9rmi0ek1vyggajaljz3g1jwbufkduqdieg2rzmt1qpw');
define('LOGGED_IN_KEY',    'bnknclhiuwe3jamplo5c3qsinhcak0pkxolh7vyrqan0i4sb8kpg1uydx4boipfy');
define('NONCE_KEY',        'rpkgqbgtc28xbqybsxcvgobm6t6l9uiq7dudxyh2brtx2kgkjm4kyg6dvikybva2');
define('AUTH_SALT',        '8y9slfn3dgyyazsaxegy7rnghjnbwgn8dukerd80qjgeuym3yaimxtf0zhcqglau');
define('SECURE_AUTH_SALT', 'e1bubxw7euo8thjicmaw29mf6kekz1vrnwydngk3ckmrdbrnmycz5jtrotqaicg8');
define('LOGGED_IN_SALT',   'x6sfnykbdnsbqftqtzrmgnbfkus7pxmlgkedyj4ebildf5b7sffkg4mwpjz76rfh');
define('NONCE_SALT',       'rrotpn7r2amhpvybz9n0ivcw25onpxxz8npseascs41wln4c8jlkthle8mpkxzov');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
