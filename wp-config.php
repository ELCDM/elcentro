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
define('DB_NAME', 'elcentro.git');

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
define('AUTH_KEY',         '6zzDA]&FqtI<Lz,S.8R.*7t)fHu4i8_3O}G>8kLN+Go[9|H;&)Vr3jSt):JDl=qW');
define('SECURE_AUTH_KEY',  'jO;[=L3t1?!85;;/VWwTa[;2a<vOF|2d-YwbcLK>DXzX9Zd_wP+9J76kLIABb>^&');
define('LOGGED_IN_KEY',    'h_q<)KS:W!,/YOp :z2z|Y7 egxd+R14=m9(}mF-I`9F%EE:cH++3;-!=zKRzIxH');
define('NONCE_KEY',        'B}rLr3):RM3(HSoVlkCpD/B*7.c@BKtQEXc7V4y(QzhGfpKKkEp hk^Bgg0.9}5!');
define('AUTH_SALT',        ',a7)|iHM(zx}M~b;_S|Ml AULzKy&Q)-UPzCp7p&.(#a7fzWfY%K]aQ,^{}2nR8G');
define('SECURE_AUTH_SALT', 'ismZjS`G$@eop#u1+y}:ZX~XwkdEMK}^K:AC.vO0d@7[mvw9-K-^YmU)T^#U1p= ');
define('LOGGED_IN_SALT',   'B/*JO(hf(8f=S-ROi=KN>wcxuFk]odQHd6;bnDxc?HCt{#5|^8dAQe|)4}wUy:#~');
define('NONCE_SALT',       'e4n~U0Yw7R@%Hm=9zXa{::T0AW`Rr,M&s`Wc`+8UZqY3P^3i?!pZT!]}*M_O;4KF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cm_';

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
