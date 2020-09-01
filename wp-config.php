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
define( 'DB_NAME', "technerds" );
/** MySQL database username */
define( 'DB_USER', "root" );
/** MySQL database password */
define( 'DB_PASSWORD', "" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         '2I*N4}%.F$HP[|NvRz6nT2`Z~dqrPmd);`]+vN3MJALOEm1fL%Kk#GS95CSyboQ#' );
define( 'SECURE_AUTH_KEY',  '=>wtnW4Ta~#,*r_8m!]7YDWc%XV>W6>*M6.l.GK@:&?~MP2A7kJ95D9^}d2B{R>(' );
define( 'LOGGED_IN_KEY',    'wQ>J&qwcgo#l+XB-Ys$w#+;$Ovo:Ke+2-jFF>@(W<-l[rZ(k1,% FAJOoZs.K7b~' );
define( 'NONCE_KEY',        '5!<|y<M=?Ogl$PdH^^#i!_h+@=`/Xd?bM_=9a?}~m-XA5usw,8nD.P=MaK4x$]Iq' );
define( 'AUTH_SALT',        '-{P?7Bu.TT]!jN7x<{~Ep;*M_uc?Ey){l L1ORS:&;Z_QQ]22N+a$f]-!(:,4[Dl' );
define( 'SECURE_AUTH_SALT', 'nuv-!EIX10R:%x6U!R2a[h&ih:;qK:rlSkv~C[uUx|*Zet]6Q~@1>09>{zx*ylZx' );
define( 'LOGGED_IN_SALT',   'Gi|-(Yo^|pH}]#G(c|,l-U/sQ0:sWLFsbL917xXT^,4KkDwXgsl.~!=rI_?wLqg?' );
define( 'NONCE_SALT',       'L|flAi.NnCh<QF3BvQhCY]%{(5ogyCQ>n8q~xJ/ND8&<r%ws{cz502X!H]OIpPg-' );
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
