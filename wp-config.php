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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'github_test' );

/** Database username */
define( 'DB_USER', 'github' );

/** Database password */
define( 'DB_PASSWORD', 'FZMQx7WN6sH47PQ69XJ8' );

/** Database hostname */
define( 'DB_HOST', 'sql20.cpt4.host-h.net' );

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
define( 'AUTH_KEY',         '?C<Q<&`CQmZH|j~%}*-`EYUXv9E1UZ9F>I`p4313{bji=K8aTVCU]sE8}6$NKU;^' );
define( 'SECURE_AUTH_KEY',  'z<O/+vLHS-<Jg|!rU2<I1uUJE]B/@tCqs,T|wX3!qph9)~=pjxO|(U4L] `le2n~' );
define( 'LOGGED_IN_KEY',    'bx9?_m &C>L{Bt^<iotcvZ[Brsjnf2JwX1<%_yZVu$vThq.!Uz<JpLEXtT/$!X>M' );
define( 'NONCE_KEY',        '`EylXq)q.y_8dIjL3 fJQ/8=q)&vM0 jM`[q%Mvr[^*bZ8i*w#M#dxHkp*`L$uwF' );
define( 'AUTH_SALT',        'qF31u4YK^z& &w6(@PHX,0PBRqtH~+JPgwJ#f,B+X<,2HpT_Kw##ak5kivAjzWz^' );
define( 'SECURE_AUTH_SALT', 'n615)ezfpGE@FNbmn[TaVGi`j&UbJbW8HD33Ywile0z;pL>hOIM/#Gq+{}yn;[;o' );
define( 'LOGGED_IN_SALT',   'qgN3_7(`pNaFaD!x+hw3>6,&k*1c98NK`b@oAA=#4l%x23IU6aMVet4!P9 iO?Jb' );
define( 'NONCE_SALT',       'HV /,&^sMMBKBq8SlrxZ< /*$)Nu`4(z{J%T7DD=iIiWF19zEi0IA?x^yr{w[B; ' );

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
