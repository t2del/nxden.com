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
define('DB_NAME', 'nxden');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':HnqK|z,M0beogV,JSc+Sq~8X3AV&F|8!qXWR5Q7MaB!r8}P[Ju++H/kAcrEuh2Q');
define('SECURE_AUTH_KEY',  'oItVlQ7Vu[p{1sBN%?Wy)P)sZJiqTnDgJ? :al!2D<vA[P.~-4?aqmEEhw:lf$9{');
define('LOGGED_IN_KEY',    '<5+21;|jBFy:wjv?b@%2avT(R2E!x;_SS)~O,D (qpSYVx68Fed-tKsT2_a-&*D!');
define('NONCE_KEY',        '|juZq4j/6tP>4#Iq%ws~kFDlt5EYD(yh/9|>A?X5Cfn0w$cM3/X D6L=l=77yDrQ');
define('AUTH_SALT',        'LVCO</ ePp*ef`0g9`a080S/H*`@oU3+8-.$^E3+K^|_;KI:xy5(BpSH6J]c.@`m');
define('SECURE_AUTH_SALT', '~~g*c.J9;$A=Xe29/c$8^.Q,z*[7@{3-yQOgQVQ?joHxk%d %UjoG1D{gyV{84I%');
define('LOGGED_IN_SALT',   'h?8k*34d%WNO?%H#*jODw9nlmUcTfr6gu4&OoE7%dFi7^AA)a[BtT+XaS3WmIe[(');
define('NONCE_SALT',       'BR]=g*KY_X`m7~i5]|c33%u7RL1Zt4vLDRj?Eq$+S*X>*{1NvLY?tad/Uc7O*Xzb');

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
