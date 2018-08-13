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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'pq8vPDrZdes4z2X5');

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
define('AUTH_KEY',         '6[,eJ3aNj(fI3iD!hcQUi{_*hA5M+eDo~,nwCuh*iwOj![G6G_> wHc3xS5P|*S6');
define('SECURE_AUTH_KEY',  '~ {7|J`v<kTlZIGHp0?NH1KNQ|V4YI*gvd$*2Suw7ubKFT~|+ZQ~yqd&O07rlbz.');
define('LOGGED_IN_KEY',    'y:^iGHK;liQakU,V]vVR $ixmm{AXGAV5Z1qt4Tize+3|WZ_k7|@N!/iKM`Rv_wT');
define('NONCE_KEY',        '.DD$;_8j8/ZqJ<ue@M_Ym3-+icod4}hBN|=pma59k~Y^o}yC#uvZ0R,bY9|<+Nm5');
define('AUTH_SALT',        '-D6u9%!2aS+?=&2!^nB,5@!Z&4nn=`H]-9s+$9j{]fVypK=s6c/@>_)>4)|_K%ZV');
define('SECURE_AUTH_SALT', ')Tu#L[#Zb[v#:|-0$i*|-Rq*CTBdZ>G#81C7*m`C*zF%z;ATC9v+azM}|O+{`.nS');
define('LOGGED_IN_SALT',   '-B9|t/.`;3schIhV/<u|frc`.Ac~46~7Q/cqa*SG0+gG)vk]1.LcRB*p&&6AwN:g');
define('NONCE_SALT',       '$},T&D>,RP/$~_iQB-4|Sz4!veQ8`=Nu5~Az}S,Y{wJGYG]YqkQ530]p+bQ[{IAV');

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
