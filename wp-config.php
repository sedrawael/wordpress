<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'cyBRZ>6QPQ5K-V GyWm3D_mYQsBkdvlh$_}:cdog0y&h81#ccXnXy!kpuFONUxhb' );
define( 'SECURE_AUTH_KEY',  'NAhy<9_|SBN*&46CEy!|BXm2ji]<f#RW#q?aM{zcHpLUo-uEeCRx(ty`dG(4=GiA' );
define( 'LOGGED_IN_KEY',    '8}E#3na|+4Syu[#bMP^3yFYFZGKG!uF4Mv/x.KK25D2r7@tac&@F#^gSr !U+{q5' );
define( 'NONCE_KEY',        'c%+7icxJ`o_7H#7Y:(yg/Qcc`||rcVx#7A:_QM|wE9SZpbEDA!MQ%`-H8R%VGZ%l' );
define( 'AUTH_SALT',        'j]1Bs$7;DS_@`-P07*b-y,Yj)C&~KWs{WN1dC}d}YP^o9Rq<,`vu>UAlxx?KC5G@' );
define( 'SECURE_AUTH_SALT', '^)m__?f3`dRK3kS0, ?wVRxVI_=EF@&;x BsDVx+O`-n$Ja^}uvWbf/f`R9ZpFvc' );
define( 'LOGGED_IN_SALT',   'GVJLqjSjL8`z$PIgSOifG8c~cx2TstTckm4_$s?;!>|ZW 28(Pi}x{yxOkA_cYk*' );
define( 'NONCE_SALT',       '*7!QHVOp?T$d45,]8gth$MefAw(B+]Qe7.>X3E9]O;NZ;ns]-Ur$sX|I)Fo:.+Dl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'sedrah_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
