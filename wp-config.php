<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'munei');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9<N!$Vlz-uyV3|oxin+6OpoW+c2pAsA7_o!ojX+Q!ZC1D7~^&FSS]FDNG+&%/Szv');
define('SECURE_AUTH_KEY',  '7HmVD4Jcy8!p(hM9.~?TQ8:xITKE^7|tN,>*G9LHO&XZF5+HJk4LOMS{yDXVj+Ym');
define('LOGGED_IN_KEY',    '0*j6{U#!t2#,h@aC9F=~VFOtC:QpBg<JJ#YL(3#UU/+>yL9uJ4H)WT5*ubn7Zs:n');
define('NONCE_KEY',        'UiN)M%hJ4kpc`TZ-^!AAhzo.TZRQCM.orTC[Kxqcim,wu`A8#Dn@z=O~y]NZ}}@l');
define('AUTH_SALT',        ',h~vw3&&{Le}hU)<XuB]1v*)>:b#<}H[|.ZT2B+h)EUI^9lR>F*.VYeF r#%<d7_');
define('SECURE_AUTH_SALT', 'd:%^G^Jf=#k|3UC`J#5Y/.Kxtc|0$W0&%(BiV,2;U*~pw{,8(Ohu}?~PQ;{ZZ]en');
define('LOGGED_IN_SALT',   'dK4n!or9f< O)t|9-`Q&zHo;>Y[6|PD1?ez{e`3x.~Vysc+HA-H-HlK;qSJj0xuT');
define('NONCE_SALT',       '`sdT/IGxmeU6L;lrN_3fJ.:J`LU9RIyahq5UMjb$%+`H5>N&CP&%VU/=-}2j{,J ');

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
