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
<<<<<<< HEAD
 * to "wp-config.php" and fill in the values
=======
 * to "wp-config.php" and fill in the values.
>>>>>>> 02cbf4dbc4e2ca873c825c31dcd42c56ec818b10
 *
 * @package WordPress
 */

<<<<<<< HEAD
define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', false );

=======
>>>>>>> 02cbf4dbc4e2ca873c825c31dcd42c56ec818b10
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pharmacy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '06`#.xb#l0wT@39I+iQQ6I=/]86Zsd246{j`sZor^:h-z8SQf*no6 ]?eaTo_]8Z');
define('SECURE_AUTH_KEY',  '~o%5+_wkkAo]V>y.:q+j6+.~0oG83VHXSOd}xTKdV{E!y-N=~D1{iZ99uz+#?`NP');
define('LOGGED_IN_KEY',    ':]#9,f7|fNx1$?h{wz)|_EKiCKFm?r7|,?wm[Oxbx7ax5- #</{}K_n%*nSPFej_');
define('NONCE_KEY',        '`Yma*#=zV$Z<6z/n~&-u-}7<21RI6,JhMUD/~TbD,2A{HC;WO|Gp+Pb|eZNPTC(3');
define('AUTH_SALT',        '!%|-e%0E4Y>J3H3Kl,jle7KNyi;1UmDL%iiZ-j1NEH@Irla7>%-gTu3?;t@U!|u9');
define('SECURE_AUTH_SALT', '6bm-hFB`2+H]MMHsx5W&+=Q%kG?Vu$M(]a{xQ/!dsE??<X>f%&H.XP`S-64F|{>K');
define('LOGGED_IN_SALT',   'AiX1NQ_y<-{hf^=!69|uG|M[`hhOSc7m#R5Z`{cDV]7b;b 9_KRY[1E}4<OcmZIj');
define('NONCE_SALT',       '--/rFyI#VI?l/-I4m>kTw-)?GzEFdI1-ysRG!G-gRB+Y*6^M2Fi>fr]38!Pf`J.A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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