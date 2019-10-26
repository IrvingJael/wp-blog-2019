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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'edf6fa09d1bb681f6510642aaa58645f5314c7d24ac69586' );

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
define( 'AUTH_KEY',         'GxgFR3W|[Ja``N^p+6vnaY<EYPW}aWO>*~T;;uzO]pg3Hg)QFCJV?Z[[c(1B0^H6' );
define( 'SECURE_AUTH_KEY',  'f*!0pJ6T=B.&}P>>azw(JDYecAex6NG?(,xbN9IWdyL#T.Qnwuy~tONCf3PP_#~o' );
define( 'LOGGED_IN_KEY',    'r++V>Zvg|<lW;%a/40h#?|~l0$t!@7+y7OZk*IzagmU;n6w$1x$^|OP ru5_w()6' );
define( 'NONCE_KEY',        '-vSiZLW;<Z%tN~4?9s$3zTx)Km=Jt/%6<US^:T[ESr?n#Ygf|&bdbZ;N;QcZKN~n' );
define( 'AUTH_SALT',        'T%g>i9_i`77aZJ4TLs//.n`adE&jTfQ2G;iao}RSd*&HD1/]33YWV=X|ptR$)Y@F' );
define( 'SECURE_AUTH_SALT', 'eEu!`JQs+<>/#qbPlF]>:,oNT8)Ev=8Ke~y*Y{qsP!f~/Ls*$5%O!DfY`!juC7F}' );
define( 'LOGGED_IN_SALT',   'b*F*PJuB)E*.;7}U~ko%X_izV6?4]HbLD.<Qd*ey1_9o#&_<_TT/J<KyY!6N7AVk' );
define( 'NONCE_SALT',       '[H`}%#O-I8$sv;/FLisQr_#haX0?F9_1S2%-<1Fs1#i?!11UmS_Ka-8QsgvN/~%7' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
