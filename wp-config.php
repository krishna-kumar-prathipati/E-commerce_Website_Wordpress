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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yyY[{%nhxd:Qt$e!> n5uyMBYbPP}yjXl(p]`~5/{j|dYaRdGnh[pg}%C>u<EM<b' );
define( 'SECURE_AUTH_KEY',  '?&%vfziDMYWyE(fFsYGYbcIoOgWrS$}luRY8hNv>|I=LmcsIJ_?m>4-t/[6y.mA6' );
define( 'LOGGED_IN_KEY',    '{mC4^fhn,RU^_n%[a|>{E}g,KgUOg$$4LM1=V`1m`~KGGKr_O&FC.t;NU%ZSmdmn' );
define( 'NONCE_KEY',        '+FH#$j<_4/|y3OS9!QWSV@0B(UjR@kLqul:fj|leD}Wb((TKE)m)|!h=&;SZ@B}*' );
define( 'AUTH_SALT',        '{ZCXd@$g@uS*-i7q]uQ5hir5Oh tH!Phq;8{%<`uZP7yn-ZxX|5)[qZPHk;[MC+Q' );
define( 'SECURE_AUTH_SALT', 'H2aoUY))JP|@dj#>aWs <j~HYDF,yH>D#RNT:dw`R/Yct -&t*2VI&*0=LVBaFv%' );
define( 'LOGGED_IN_SALT',   ';Q{D&rSW>VEwG/qO0k:s{&I2>=Q,%[0^38(R*OH5RmR<`9.]`P#GME*tm6`W.T1 ' );
define( 'NONCE_SALT',       'xTZf, HQIB5d3~3#$plt{^=5XxW^y7($$dsOau3x r~<NAk|v8J=A_{>qVvj^,Xv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
