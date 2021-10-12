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
define( 'DB_NAME', 'site_ecommerce' );

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
define( 'AUTH_KEY',         '-+:}Jd]Eb]kqc4/$Q$C=Tq.T:Jps/^E:tkBuiNG<SOAj2M}I[%F-PMA[9m#>#AYw' );
define( 'SECURE_AUTH_KEY',  ';`_[.r Q_^M6Z*2}[^i|OGUTY^~`/-V_Vr!ZI)7t>tK6gqH3(OIma)!>MK#@acCW' );
define( 'LOGGED_IN_KEY',    ' w6/>}</JNrwQ4YtB_7&uvwR:c,I F4i67&yG6OU>.7nm_7l+<$o3(D-ilTi@^#|' );
define( 'NONCE_KEY',        'qit=k|a1:x/qWgiH%YFm^^k|MviQdEvO(62EA*7/;fMGP0.g`^1tTAa@kwB.&fr|' );
define( 'AUTH_SALT',        'BkZ[`J{DE)`0DLVqBCWkZx<}r|+}`/:!-78Gz3}Nh6#.xRCY;/&1[n68g{t9EBgH' );
define( 'SECURE_AUTH_SALT', 'rwYV<<(OQ!l_`?fP_X6`F_3TpVKDsT_OMbGBe&x&h^IQ|nahAGXFkRsh]go/u)VE' );
define( 'LOGGED_IN_SALT',   'Jy{/}7EAD*#]s@I`AW8)./zj=ZhfrbEC&d5Y6STt|WS5]C~mic+l{d`.]OQNq[]b' );
define( 'NONCE_SALT',       'm/rcq>6HO|5At@[|;,Y@o3P~:@0E[28N/>}:wjzV(uLJ1peH?3*KEgttW]0g;96.' );

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
