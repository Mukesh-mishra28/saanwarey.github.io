<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'saanwarey fashion' );

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
define( 'AUTH_KEY',         'M}nNv3HMCEbBJ|ues{:4;Wt$k=D^I=CX0UKnKF+O/d:|P);i/u?}RADh},!Jjwm?' );
define( 'SECURE_AUTH_KEY',  '8[<zfI7>vZh~^s+e}PRmh,=Z67=CIQ{=T}dZ l`%.>a=}c9nDNrQ*?kN>x!z^T!O' );
define( 'LOGGED_IN_KEY',    'LlsD^]>dC.ze@hbY))P*?5DG6A|SGKi_odz@^NylE!#8DqFtEo>vP7_Kw(rxSCsf' );
define( 'NONCE_KEY',        'ud|L%mUO*9)S=?E@g,5DBm@2V#CWLZ_z}zo4aU*jM[vMm0EEzd-]4p)}_3{+`.!#' );
define( 'AUTH_SALT',        'OQ rfw9dCn]#>02yU0S!m=l9pt@5^5gd3J$(7Ym}jBX/X?^./yo|e{VbXj#}flMH' );
define( 'SECURE_AUTH_SALT', '_gm~GPyvGi3ThW=aWe/QbaJFp~%]~ k(N.w}qmv9wZ4~$:aTl8<s^l%[B9%0Xd[Y' );
define( 'LOGGED_IN_SALT',   'y!tI_.P5Iqv;i:qHR]hD2!bSi)T(Fy/[~2O`7F:4(]i1TiZ5me&$NSld`CB*+ygj' );
define( 'NONCE_SALT',       'i/)RBfS3[G3)*laB:t1f+_!#YzI_/Mn9zm`k3[6ZW &prrYijl$0qen;J+5~ktH4' );

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
