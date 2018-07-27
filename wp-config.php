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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tottiITtibi10');

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
define('AUTH_KEY',         '0>7,6Ou=O}g9OioO6v.GgW*k!a`@.na9/M#N7+Cqz[9.k;:]_qCZ=A,nna-Lh4A3');
define('SECURE_AUTH_KEY',  '1=}GtnAJFH4UP-C5R,=DtNjv-}0A%$%aU9#g6(V-oWVM--E-6}[68MAbaL1Om&%i');
define('LOGGED_IN_KEY',    '}CxXi)]mx^*S1nZ4WgrVYDinC>41izjJws(4#5B[R6I8u.=UKk_l>;p9x7G:)EWc');
define('NONCE_KEY',        'EnW!V&Km`(.KTP>_j7./ @m1JX5y0tri=NGpQHe[_%R-wf/-P;cg|SlueAPP4O5i');
define('AUTH_SALT',        '#-P7.77uV`Zse>R4]##SAvG5SbCF:Uf:M2{w>6>x7qW*ABg=6E-sp{q8*~iFA5,T');
define('SECURE_AUTH_SALT', ']~d !VGIY20bpM~i}aVo+ e`Wf:FzzFReb>ScX2Ar*<h%<Y:zOp/u`sg^m{hg1+F');
define('LOGGED_IN_SALT',   'mTp<&sEQkvCJhT[V7|e~I:![Q03_xs4BBXi.G.bd83;ldi`9_x?e`LGKvV*0Ls_.');
define('NONCE_SALT',       'cQ21oRf.>3SEt7!>-Y,f|o|R7mn4F&yOC:b#r*>||h@x$vgE)7D>y;Sw^*J9,N7[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
