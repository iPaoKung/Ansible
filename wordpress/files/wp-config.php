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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress_passwd');

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
define('AUTH_KEY',         'VlA{@4[3ty6,=fDAy >=`<7H*+3Nu<*w!V)WpcYNZ^=l<cUaVNX#CUzp-,/SVPPf');
define('SECURE_AUTH_KEY',  'XE0{/lwj[jGmmohHQn6OVpFIm.XVb OT:l%9*l6V:1vclGi.3^sG)SB:7+]Jd$lo');
define('LOGGED_IN_KEY',    'm}ZZ/ZGTY>w@Fz6LidZ2`+pXu3&:2$B~l/Q6=cd.3T%r/2{0?u%hG$o- 95D^x^(');
define('NONCE_KEY',        '^w:n__n@JElwAa%i0|R,Y!_|^yDep{fvGT3nK>o1KL=pn.t@MVrVNY`p6+A?+H;U');
define('AUTH_SALT',        'VN5Nh@j*1rM_]ggkWb$4A,lDI#+bZs/k-dMzH#GFH{Y0U~l&xu4?uD-+s[SAI6K~');
define('SECURE_AUTH_SALT', 'Lo~xou[W&rYqX[cHouxn J)/HC#rJ6ULm+/p/{a1F0S5Jn]t4^T$ZIN30CDq,lF_');
define('LOGGED_IN_SALT',   '{vYp!<sirnZII`5l@7)u)C^LP|jq>sQ6%UHnW`ge3xDz:qgf_qx~WFL]Bf4~&T_b');
define('NONCE_SALT',       '9wdg^4QfiK/=}A=A;m`Vm/q?L!}V?CZS+5`Cr`]]|C/D5S+fFR>*lqdbk*S1CIRb');

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
