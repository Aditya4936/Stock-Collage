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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'LY(r[vAoJ%V}#7HJa2P<rHS{rUMQ<b:)3>D#P4BIyGW1VXg{Yf3_3HCe6r>{(P*s' );
define( 'SECURE_AUTH_KEY',  '*bAG&]mUO7^&.PC!T@vd?TR$A-l*]O:VV-}6VX?F23Km]7xz0$H,p-k5gJ3I68}C' );
define( 'LOGGED_IN_KEY',    'E66c>+i#DBntB0N].MeX<:lCDMD)u!m~BO}wu;_O`81Sd;:Wn+2dP%+RzbiHo.-{' );
define( 'NONCE_KEY',        '<<Ob]ES%3iP3JG{gWvxS** HWp;HV!l1ldU<s+&ck=iDuW(g([>)tiD<9*}w@ECn' );
define( 'AUTH_SALT',        'EtFx;WDio+[`sK#5IL1^@!9![4iInh]h./}A&Qn>f;A^H1VnAAXHr_FOQqVz~IL<' );
define( 'SECURE_AUTH_SALT', '?}fcRxp5A+[)7WdX]UUo%h3jW-:[j`LvwCu}.MrAlfBSWk-8MJ,~w@Tj3]BkD;#[' );
define( 'LOGGED_IN_SALT',   '@Pc;YajSdr]Sx^F.kWwl2a_q4{CfEqDF>aCrR3}Zfa#4zAtEM }m[gb?eWe}-hR/' );
define( 'NONCE_SALT',       'NYvhV&%0mKQbzvyspB!S*A< 8OOckM:}7uq5-RQ+AC?_`}_QdzJY=Xp?ZA-|jsMb' );

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
