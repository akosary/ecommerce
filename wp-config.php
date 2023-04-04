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
define( 'DB_NAME', 'ecommerce_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'U8Q7TQt,goQ.vTxzAqj6CrGFcSE:BJ7@c&E:ctq)33GxuM8 3*JrtTR;YMX]tH3X' );
define( 'SECURE_AUTH_KEY',  ',.RcUe.$nYB%U`:k npyT8gdLmlA2f/ZaVWEHX7$c!F6J9QjyHP4*T6WA5J}F2/I' );
define( 'LOGGED_IN_KEY',    'v1TE,pqGpKd*[8n:*h=k-0l{IKObd<f<Dfqh&}^~)_EgJ)SIAx[@O*=; 3fG.}lb' );
define( 'NONCE_KEY',        '21V|X`05Ptuvk896<ZbJ!ozdl|PUk7Fn?!uxGy5(4cgWNpgBcoY?,kOxlb7J/D&.' );
define( 'AUTH_SALT',        '%o+)WYoEEIGBuo iuzK7;gYf#VoTbxdLJ|fj7KII `[IvZUYCR;HFs`{Z72moan2' );
define( 'SECURE_AUTH_SALT', '[1{odZ*kT!O2TB=ec$FcFJe[qn(8^fr@4r;5V}U;D,5a0tR1!$N Lc5 },*bTM;u' );
define( 'LOGGED_IN_SALT',   'EO%7A^=HrK(7/}jV2]<nS6~F1toaMH=]wHb6Z!hl4;r7*b|Q;)&-+;NXfmZu.cE;' );
define( 'NONCE_SALT',       'I9 gd Y}{w QLY}=-$+w$=LLNcK8:47U0-K#GFsq65CEb,vNYD<zrJH-30j+)n}@' );

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
