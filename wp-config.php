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
define( 'DB_NAME', 'dbbuildbox' );

/** Database username */
define( 'DB_USER', 'saulobuildbox' );

/** Database password */
define( 'DB_PASSWORD', 'saulobuildbox321' );

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
define( 'AUTH_KEY',         'aRP?c*y^sxbE!S.FL<8#Mk;`(Z^<gRf+Jk4A:/ {Q~`{W-$soPKX-C!L^upZDPR,' );
define( 'SECURE_AUTH_KEY',  'O=k:7KRnxs=Zs`Rh[$2@DP@xSJn5%5i$E+k$j(oHP(P^(:Gd&hqSsmTfPGZ]$Gfl' );
define( 'LOGGED_IN_KEY',    'zu#!*2c+}K,i2B#^8Q_!x+#0&l.p;PIwQsH6UF:*NqbW+y950dM&`_Ke78E*Pusl' );
define( 'NONCE_KEY',        ' L*Um.JE0^?4&kY`5f$hO7 ~QA? 4k6YV-6I ,cZNM;a#k^;$xPwk2Jz(:D#v|U1' );
define( 'AUTH_SALT',        'n3gC<fw%+5 Z9B.ECv24WAeWN;z#u>Dk5f0>h9RB~ %t3LtFHb%#>w&1KqKtivZo' );
define( 'SECURE_AUTH_SALT', 'Q2JGrZDl?t=s1,K-!faF9ZKPDC8h^{&t0E0Y0S;>A_|~eU30o9O^L01s|RU2W~Tl' );
define( 'LOGGED_IN_SALT',   'ey=h,~cB SaHdMwQ|sS ]my?-<:>t:q.5Di1*|Lu=64HL^%Pf{[UR6MFF(/f5]^L' );
define( 'NONCE_SALT',       'AI+6#i8EWUKIy.uDS/6y|#h=7asY:b*kajDfFMn*.wjxIPyVC-dTcz;}N$R}pgFg' );

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

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later

define( 'WP_DEBUG', true );

define( 'WP_DEBUG_LOG', true );

/* WP_DEBUG_DISPLAY é usado para controlar se as mensagens de depuração são exibidas no HTML de suas páginas de tema. */
define( 'WP_DEBUG_DISPLAY', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
