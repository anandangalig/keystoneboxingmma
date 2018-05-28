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
define('DB_NAME', 'Wordpress_keystonebo233606');

/** MySQL database username */
define('DB_USER', 'keystonebo233606');

/** MySQL database password */
define('DB_PASSWORD', 'UQc3xFr*');

/** MySQL hostname */
define('DB_HOST', 'sql5c28.carrierzone.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '_c>^@Mv,_%i8Ddw#i]8P|!g4xp^fy<-xFR+?12-_)8&qF6}>{CQ,oQ+aaNLo0Um.');
define('SECURE_AUTH_KEY', '(b=;g-m6*eTB)9{BPGBpT$0R5h|}p}k07&y*gOZx*o^|P -dW4P9:eqX--I/-.cJ');
define('LOGGED_IN_KEY', '-Krvy-%jHI<n>$a`|@=6m6|+O6.>(Nk 4p T-Uio~|7`+r6{5Rg_|O)XO>3;U:h3');
define('NONCE_KEY', 'y2ndW.<-x249+c2NR$$TBilYZ|MI_xB?,`6W6#nSwYvO#RDk`|J}E3YB9lQAvJZq');
define('AUTH_SALT', 'KY2gJ-X-*P[?k?=^DeITPE|(sIi0V;V|~7gM7j?EYyC#S3WZ`W-#v5KTmg!ow8$%');
define('SECURE_AUTH_SALT', 'n!dH>^*&drS|qtUAmkZ [`#u|@bvM2IDx.>:PqhN~zEk0Xqas3O|f+I {l&g?cF[');
define('LOGGED_IN_SALT', 'PwijT17nSEmh3TJa~*0>-F+JElz)!s5DO,O^;s-L0c<*[Iq8/{y|`v=juS;#;^MJ');
define('NONCE_SALT', ' y^OZ.#@!4ph$)|0l_q[WK=LaK/C:zSLVwh)W>YS=*|-0[ h|99vf6gO@68NNsx6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix  = 'wp9d750cc7d9_';
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
define('WP_SITEURL', 'http://keystoneboxingmma.com.previewc28.carrierzone.com/');
define ('WPLANG', 'en_US');
