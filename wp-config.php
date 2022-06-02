<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'f>k_Qv${uVo,^t>ha/wxW6; hk%L?Tofz}q i/6MAIG4*;G`(bczMQ%lm+hsF a}' );
define( 'SECURE_AUTH_KEY',  'PO<QBd6&=&?xwQ1a.#M:Eq?]lPEtyQQQg:K;%:ub&:eoq<nnQ9.TW/HQPj:@2Pur' );
define( 'LOGGED_IN_KEY',    '>;Qf3ybyy2O60Uv`U]7mwP`$~03sby4PcO(VY%&]CIIHs.jrRgLu@,2d?yQmFb.(' );
define( 'NONCE_KEY',        'NHc*5h;[TAgA5cOMm^a1y_-?X9E{)e[j5K+f$c6i(u#4[di8(0*)&ZJ~{c8]v77d' );
define( 'AUTH_SALT',        'pC_qt7@h0x(g{t5id~j0fOw4%50d0@l@JghI;;gn+)uZdqj?Mi=/rC}yz?=H1+<#' );
define( 'SECURE_AUTH_SALT', '5!&3G7x[]jMzpp cN*?6Sxgg_b]cM8KIexdTsd(vm{]~f|f]rv,||7!,~*2d$TMI' );
define( 'LOGGED_IN_SALT',   'Ae`(]Wd=|ACvY{2LQiNUdwO{x:%2e?B|U[IAMUH@}nF[rB`fy#!`z[le-1Q6:,,c' );
define( 'NONCE_SALT',       'Xs/5CI4qrpo^w-/f^_({F3XtB<mlzWxJeg`~:;zY#+lo9k^B!%[}Qa,lv2gF8ojc' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
