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
define( 'DB_NAME', 'wp_cobold' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TCM@4A&UJJJB@OM76f45I_6|;;ZQla?bf.(|*|3ASFP>b![T)%;KHIiPUY,wze7m' );
define( 'SECURE_AUTH_KEY',  ':^kk4|#LCmbH0-#a72e3hkB86g0(a-X/[#[Gd>-`y-}tUTa3r7(|!M7m:kU%@T4$' );
define( 'LOGGED_IN_KEY',    'GGi5;N1U8,{H$Kq)~g%{ldWGfUt+WDTr6A+]&h|-lT]265#.{!UWOD^v.&+*ui${' );
define( 'NONCE_KEY',        'Bf7/e~6}?n]0M^I:*4.MX>i0u`o,SE}K1,POGI:CYZr-!c<2<EWM5ORp5h6 Kyhd' );
define( 'AUTH_SALT',        ')9@Kdg%Un~~#zbh.3J}Ukbe@l3|tD-Z$alk2P!7<92}87SfQPiY_(:z5PYt)rQbc' );
define( 'SECURE_AUTH_SALT', '11_(:SFnX2o:bn$?3XY{k`er28/WuBz !yk  DAx73x*CaZNvMx6<1ccVHGBQ0k2' );
define( 'LOGGED_IN_SALT',   'i;}|yGk+2yLiB(1?2)3sMyp<XE-P0rU fk4e%.S{qoo:!-qseFrTG~{Q}Vf>[0_D' );
define( 'NONCE_SALT',       'CH,98}f??}E(@s>0foS5b{<~T^iiS^D(/#9-II2lH@lOlLfWNf-`N*m?LvVIi<;6' );

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
