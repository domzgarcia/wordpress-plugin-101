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
define( 'DB_NAME', 'wp_initial' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8@.bGTrgLg_.[N-{:_a!}XfJ4$}^a#/->4&@q<p-MJu~]O#?B<yf};:GSMuxjGo5');
define('SECURE_AUTH_KEY',  '+)u,8^Fi9.a5fDJ1Cs`xP@yYnk48[n{ZM/F]*06/{(ZI68Y!Sl+C48oKo9dHYJfD');
define('LOGGED_IN_KEY',    '(jR(TF6+wB<VEkfW<`_8|zT5!@PnMZ8QJse~<i>nmobXTUL[z.?<.<Wt0uU9afmn');
define('NONCE_KEY',        'S(Q{9 ^7}PH=NeXj+k@GoH?>-eAY-glC>k#D|3s_q-Z,t:%|DkM>ZGRflMy;M=@k');
define('AUTH_SALT',        '!+K&.F5WkSJ =k;K)Xi})a&7+ (aM?1FKn.0+EWr}8UPd$LCl#4n{BQw6!GoC}~8');
define('SECURE_AUTH_SALT', 'mR|4;ZX=f;lC4lOtD|`9(#bSy1RPtYWC(mg8|&(pt-xCNG/5~(?fO+sTVw[+-wxE');
define('LOGGED_IN_SALT',   'v+&t9N|>R<47uF<22%60cHvUS>p} 3];cr|gH,iaT-[i!Z1c|4*3KzEG.PVwR5-1');
define('NONCE_SALT',       '&p*&Qb]3.]4Fl&L77CXkYEh>sOg.aBbh10U7U>-*t}{DRmK!<g-Jjf: yqYujJo]');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
