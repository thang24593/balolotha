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
define('DB_NAME', 'balolotha_db');

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
define('AUTH_KEY',         'W?;z0oU$,w1Q:pF{R3 W74n/us{4{]!gvP{ngBKL!>Ie3^tcwk:#0(*Q/gL>o.x@');
define('SECURE_AUTH_KEY',  '2XA&;;3g)tc.;l{hs,wLb?Qm6L@Lbl[^$l,(7w:8(;eBXHj8W=5<R${=y*k?>G-2');
define('LOGGED_IN_KEY',    '9y|]CF!N~.cy(Pyu,T,Rd[db87O;BtO)U9Q#3|2D?G+l~s4P#+OFNt9>rn~R&Pk*');
define('NONCE_KEY',        'y#~:DS}ZK~y`W;~tVH_L-qA2Y7GS7fQ,=hn55^)hv|}J18#-)GW&q5L%%?5PwLNw');
define('AUTH_SALT',        '*RY:HA[M0~6kz=|ma!9{3A)}FBg2}r/y6ba``l3v[Z;+)-)jEtWu|JA8Kz+Vr&B&');
define('SECURE_AUTH_SALT', '%MT|&l9`v{**Kh4WuQ9B-ouNVYZx5pA01 `OBVCg2L[Fc?;WH={!lpX(,$VEy5Fz');
define('LOGGED_IN_SALT',   '(#0Ouf;2|t{`+8V#:{I<~P0PR@S%Aep7cBn!4xN?~<#5z3dOT+y.0!Z[KaMY9v2{');
define('NONCE_SALT',       '{Cbx%L i>XLu0=5wnm&YtR4J<o6qiRquY *9$w]}W/aAePh%cn{oOzJ/X,yz%Ml>');

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
