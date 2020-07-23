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
define( 'DB_NAME', 'wordpres' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'UTT^DQ-CMJImhr[9-YoS|;b%sx}Xc;;V4~SBw1;K>76x}A,!I`ub1]#qoyY{;$H%' );
define( 'SECURE_AUTH_KEY',  'HO5r8<J;^i+1<YDg_!xa[Y:g,0f])JaVr}D6E5G0HGRum,MIln,i_h:</;P/:Oo{' );
define( 'LOGGED_IN_KEY',    'a&|{oBT&crDqUugyWhkQLRh[7t/Cbch$NvnkL/GJjTC8OO&m_fjz^|mwXB6vO;yS' );
define( 'NONCE_KEY',        'c]kDLNg!H5DtoS!vQu|b DJ-}Bo@/oB2hEaqV}~MF(YYHi$tEo2vAO!pPZ76kBG-' );
define( 'AUTH_SALT',        '~/,hY`fu|^gWzJP3O#~>s%ZMR0.1<:g9b{Zsi<<,A_hPn2|X^K6`Oau%VhiTUjPP' );
define( 'SECURE_AUTH_SALT', '8Vb~-Gl7@GU!5)Xak`VO 3!v!R@iTZ|;s,&czm>~F}*g4H>DDJ?d(m[([32x]!0H' );
define( 'LOGGED_IN_SALT',   ')GFV-D-$Yn[z]Z.2PBB)?Ro)[h):+PP^q,?UwkF13qSkz}R^/]2?+yF,qnua)gSC' );
define( 'NONCE_SALT',       'ee/0XRcrwV;l`Mo:KJ[M0,}c=EcW1(s$SrC;<{A^?qBA/>7}.F2Ls4VG5]N*D(U-' );

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
