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
define( 'DB_NAME', 'Cofeein' );

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
define( 'AUTH_KEY',         '{z#6H!]9Sx=9)_fcUsJT@g9S&f)%hpsu@3KnwF2ue~nx+kOLPw^L%!y.?v!HoL?5' );
define( 'SECURE_AUTH_KEY',  '9$t#UepS0+Am$~Rap.GbT]+qg(}R3E$g^[f+Od;hGy2v 69aJZxH{~y;&u*WP}tX' );
define( 'LOGGED_IN_KEY',    '`V@wz-#,ua !yyPJG`PXD$23F0X+D??`cZ#):;PIcij4bTRQikG>+e`odf0PEFCQ' );
define( 'NONCE_KEY',        'eH4=zVfiFb1zH<CX*{)M5-LeE.mC5H!D}#_7^&(vkL52T}p#D#lF1b|fBvsg9;nE' );
define( 'AUTH_SALT',        'I5kq@H;M;DB$]Vz%SlRR/lAEKT)_I0Q5/Q/Et:Qgyl2__-0NCG~PWYN L#Q|K<+y' );
define( 'SECURE_AUTH_SALT', '`HD/a9[U9?wZnn1.;Za=-5?VLmPA}?WKoLbRYE#pP#*+:/]z?#;cQF~/[? LixzS' );
define( 'LOGGED_IN_SALT',   '+sQf[DfD93S52p9I!NAc$T):b<FT-j#_q1bOQS4UH*FR-^|8p,7i_VR7QJPY`1]g' );
define( 'NONCE_SALT',       '(,mC!&V vYk5CRHgIfbwzMHnJ3MX=BG_l8&him7d_D%lg!D{u&aKtDRKQ]ZJ4y?.' );

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
