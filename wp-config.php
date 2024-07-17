<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'couplet');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPCF7_AUTOP', false);

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
define('AUTH_KEY', 'p(F`c:GBog DS8{QAp-rUVl:Lcl O#e^pnmP^(kR{8r.t gsF&JB6kO$vt SE&)U');
define('SECURE_AUTH_KEY', '-5)4Gm7~6S& l3u_~1pKFKQ#KqbDz(}Y,l+>aSBqB7k`46Z)?Xb?|}0oHqMatDsu');
define('LOGGED_IN_KEY', 'lv@4[K0=|+)$L86#4?=>|)V^m0)aQu.@2OqPJFgjXgSy7ai0Aki5ym#,C*ZV.g=)');
define('NONCE_KEY', '$18=,AKtIT%O$o.9#C3.?_C*PO,g4h62W V:*,pqriNhkf/y{{}X(TS>jCysh*N?');
define('AUTH_SALT', '+s3+@I+C&@-7HP8r1wn}=yb<p-f]9p_[22T.8~>b$~?w{ri r$KFf%Pq9_q,,P f');
define('SECURE_AUTH_SALT', ';J89:ru=uJFW+RZd{}w).;OUC a?ELj@bHjbdZIql7u]D7(gjBf)zxmS;fl|MwQ^');
define('LOGGED_IN_SALT', 'b5b_N!nL0qxGuUwu3ugh;(2$EP9(Czx%i>&,c*x4utO?yMn$AnPw9iP;.PU{OjMq');
define('NONCE_SALT', '8Wxd&5;J3#bsgEUU2-s,zVA{i&NEYL10:g!JBlk<T6,N~h@)W=vjIthYLy7[&f!S');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

@ini_set('upload_max_filesize', '128M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';