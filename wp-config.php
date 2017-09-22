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
define('DB_NAME', 'monsite_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '2(Ye4-rDs:i]CRJ/)|]Cd}x;;o}b(}E1!ewzc<x@uE[$0GUZxh}T.ShFH8Hm=N4a');
define('SECURE_AUTH_KEY',  'DqP4];Yv.Hxc.bI22OQPq>}`wsi`]b=.A-{XqFsQ&km}fRt??F7NV6$rvI;-39^I');
define('LOGGED_IN_KEY',    '{QP_SjW+i,w9O%|?c=FrY1XsP|*gE SbmeT}:$i4?_APOT^E|&P:3:NSx`P`i1j1');
define('NONCE_KEY',        'Y#+nWfs%{004aHBteHc:Tm.-o2}m5Z2Ah|DBlBZx[>ixp;;4av}eT#m|B-;Ae- o');
define('AUTH_SALT',        'oZxAx[K3D6;58<}>5 >.}C}ba:(44ldU40L8WFu ;Xo9u8l6%ORZ?n`L=:TpX1`5');
define('SECURE_AUTH_SALT', ']SgdFNy8FVdV1fq8Fd>!XU/y:DQuU1V6vk5N*1ziCPg;ADnj~rZH6c=lb=<7Pc_r');
define('LOGGED_IN_SALT',   'x&v%@,FA?4w&M@+C>Dopx?W38}08/WU]bo,RDQh4*exRjic%+%QbNib$v(%>1HW~');
define('NONCE_SALT',       '5qqF#ASOH/R+O5dn95wQ-*qKWLIVzZ`;Q $bN,Ic,:/d/;IlbV8JR, j:})a0D$g');

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
