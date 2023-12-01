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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bistro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'h>k7|J,I %;U#G,_6}QCD{ ^!V.LdlzSDG?IM~kPw/Z-mJLBK&$|7!i5Zuey1nH]');
define('SECURE_AUTH_KEY',  ';{b+f^%P]{%Q&@+q|ZB~_-@mBg1xR#)t?mzG=|-{gGR__X2S>!k+x59<BCD^TelQ');
define('LOGGED_IN_KEY',    'Uc.mj,b<THK6NtS;hND00rrlj~#X_BtD6x+mxmFF-A|LV(i?oYoO}@$;-|[HV$sI');
define('NONCE_KEY',        '>R<|+;ApL(m?7rwd`1V.SygyPhNiF6|Efu%b-Y-.rptth_LT]oS`qwCkSNSX^#-)');
define('AUTH_SALT',        'zWvuvE enLh?Cmb&zCH4%/.[DYM0BSS3y]P-T%|2+eA)#5hYU6i^169g]4r$m Bf');
define('SECURE_AUTH_SALT', '?~F^,Wg!U#NG` GJ,E}y`,}G<MqT2*45U]<mi!EH],M]6n9(=a#ifnXthcn,Qc9]');
define('LOGGED_IN_SALT',   'MWL3 [P;HR2]j-; g85+O(+2-mIWF@->C/YPE-Rz2Fj?sXUG|^t-o13jOmcLyN>E');
define('NONCE_SALT',       ')%9_M?zbrc(qkZCUOx-O-iS%<yB:[,%Q:f-0A@.5+IuwV#,PVUBK3ZMHYG%+L{5?');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bistro_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
