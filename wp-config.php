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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_pkktjbalik' );

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
define( 'AUTH_KEY',         'h)8:5AN#41<<~%i7,&<1dmC#1LKLI 7$b7PPcZ0+M{[@jb/Y!D13RC5b$T.k{_?0' );
define( 'SECURE_AUTH_KEY',  'ToLiFG6^]lz0n30k-R&RSZ<T009<F.&7dkE9cRXEgr,6Yo;GQjt,waX4L6il8vxy' );
define( 'LOGGED_IN_KEY',    '5d$8[ZS~tHWf2^yycyOHI]{F4zYueWB_$Q,?=GC($Yr7/h@cx^  9yA:SUPCo~:y' );
define( 'NONCE_KEY',        '<$[emkp`iu!s0:veKX|c)gl@d++42+M.A-0l}+|VNnNo4M89;X`,D87]&P+bkg]_' );
define( 'AUTH_SALT',        '?aTI8(Fi){O&I|a$Ziph5o`ja,(;Uc8?&a`>GoNXb4E>6pe)^K5aORVR9[Q1_`I1' );
define( 'SECURE_AUTH_SALT', 'N#3 /s`O#JFG%^z*s^_Ltw&6-].#I<}]41X?jmkrB1;I~?(8iB;8:$#?2V1E%8n!' );
define( 'LOGGED_IN_SALT',   'qRA|7icb]m>ZCAk1Xc$L:bW^sL~3Bxt~SUdn+=~IM5cwcF/Vg&GHw84/ms ?e,.a' );
define( 'NONCE_SALT',       '7J:B 5<),.e&d4G2I#Cb-^}B0@xP)p3NYnOV~hs?BT.d+I8F$1.6e0[xcsIPMfyy' );

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
