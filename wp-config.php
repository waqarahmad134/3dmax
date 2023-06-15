<?php
define( 'WP_CACHE', true );
/** Enable W3 Total Cache */
 // Added by W3 Total Cache

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
define( 'DB_NAME', 'tdmaexzf_wp713' );

/** Database username */
define( 'DB_USER', 'tdmaexzf_wp713' );

/** Database password */
define( 'DB_PASSWORD', '0@-6.SF1QpXTj)' );

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
define( 'AUTH_KEY',         'jdt5daheisnrq7mnb38sdenogqlkjsi9psl0bogisb3eqn413ynypwpjyvkam8ag' );
define( 'SECURE_AUTH_KEY',  'ck1pdzkyctdfo9mqjzsokbvlj16nktztmm5l4lq1aj0rlbnuva1dwikwc8t9sazw' );
define( 'LOGGED_IN_KEY',    'vetkmfcxhda3afb2r3aj8fqzwo5ozkugzuyrbt4efdsnnkh3amlchzdxxumqb8mg' );
define( 'NONCE_KEY',        'y2b5rgz78aw3sea5opwwtua7jxemzupgp1qw9avw5nfztxu4grhtihllzpbsbzgw' );
define( 'AUTH_SALT',        'pmntyhymt3i5fja4chrebpbiat8gc8h3qt0cyt0nl0u9za5i74aj9b12wln2vnee' );
define( 'SECURE_AUTH_SALT', 'u2qeie8j8lwajhkq73aemd8igwrhsaam10jpxz1nhejjuh26fvr09tzdiig5lqgp' );
define( 'LOGGED_IN_SALT',   'jvk7i9m5ndiwcunybyytc5l9yujyygtzdbhk5pqc7j58ol7fetqsmcfo3xu9jifz' );
define( 'NONCE_SALT',       'pbmgumeaj45zidtykxsdxzwwsxkxbdx6wdoujklg2tibicimphjifrwyimwym2br' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpan_';

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
