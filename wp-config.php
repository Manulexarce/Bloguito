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
define( 'DB_NAME', 'Blog' );

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
define( 'AUTH_KEY',         '5O$nJnTAStKv/)RuUmY))m{&i3XDPr{p0^H|WSkyqGH$,p./g8UWIAW{Y LL+wkb' );
define( 'SECURE_AUTH_KEY',  '<t[}VB3]<OdJ^&sJc[]ek(?m/a*vz~B0/zbI9_I}kk]$<zC`BZ/tg,(J@OL57V%E' );
define( 'LOGGED_IN_KEY',    '`QT;2GfW$+5wOX[Sf.{5.glGkA=FIpa!Is0NJ!e,sI<6eFTQLut$t|VmGLTMJG*V' );
define( 'NONCE_KEY',        '^ae=by];v&~S928zEo3,|e-Rw[8Pm)xI 1H(aMueWOHT}4haeR_vnUXY)v~4d,4c' );
define( 'AUTH_SALT',        ' mRCn=~]]<|TC+acQ $ )DaX$(H%R[GAMZE C3wtV18Y:2>zp(ltKsy71GT>UJ>.' );
define( 'SECURE_AUTH_SALT', '9YlepL~ )!7r3J}>p,>zZzV.#nrVi/(8P-u^T3LT_APO?_^WMVF-o<~H&I4-z;vJ' );
define( 'LOGGED_IN_SALT',   'jn< ,G#cda|Edr34>1/`w[fZKV27Al;yXWLSH#=|uNTfXv)uF_)<qSk!r@:dl33E' );
define( 'NONCE_SALT',       'GY3 P!=mAIBTJoN$W]/#6gZPo$gfh3[wDH_Fuar`P0=6NrP>TyT_.L72GH&_t2Ty' );

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
