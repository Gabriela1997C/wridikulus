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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Riddikulus' );

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
define( 'AUTH_KEY',         'r1|XzDs}}XV~I:#(^($BRW N.(I+Vj _&Gd/%C:gq=cA7%_PrHbD>=,jkL[-g739' );
define( 'SECURE_AUTH_KEY',  'AnvV*RXfu,mfq;2-m@swhx]VIwY1FnB8YYj,PGI!rbk4Gf^pm.k,tl_(S=]]J2_U' );
define( 'LOGGED_IN_KEY',    'ZWG%9K+N56hZ[Zz@([t _SEjk.L(6o2u:+~|-=):yzk#>;1PTeb]iGWB@hL^c)wt' );
define( 'NONCE_KEY',        '89EK6~Ch4}YiN?#B=e_rXC3&=6^Mr<-EZgCi]n(N`E0<U#y;RNGYX .327%sL@/U' );
define( 'AUTH_SALT',        'ND%|{Q-aI>&yr=/Ma{))B>#4Z6-{EJx@8(g!d0VvNb.{?b!h&}i3&vBw-,]c*r;x' );
define( 'SECURE_AUTH_SALT', 'Hg/@U=b_,AJs&lE_/]$u_`1>M6vikAf,t$)LJtmP7HIXg0>uIYE=~1IX;n%D(jSB' );
define( 'LOGGED_IN_SALT',   'jzsx#;YDc4@18<.f=EVA$mG<(QN 0InHbYPx3wlbpxw[Uu>{lQksZl{QnQ0uOi x' );
define( 'NONCE_SALT',       'XF*GeGJJo?FaH=rPN3w/,qjP4|ve@9j3h`BT9,k<hKtOvWQ,]+thVfJ1puAp|:c<' );

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
