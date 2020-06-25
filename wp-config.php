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
define( 'DB_NAME', 'idemohit' );

/** MySQL database username */
define( 'DB_USER', 'bizzury' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '5&DL;6p/_txz-JFP9KzGM@G9|hAul2<(G7n 6uT~{d?6RR0 *I5$-oIfwv<O(j[6' );
define( 'SECURE_AUTH_KEY',  '7u*zYR73VK=F88&/< 6XlY0ZQX7SYYKp}&H@*RiVm=hoNS*NW5Zg:HR`8h_>e>gw' );
define( 'LOGGED_IN_KEY',    '&0t9p>5;DK;b]pT@`!bQGz3PD:Y+;*<WqUBz?K@wEN%/d.pybbH*&]g/Y^N_>pWZ' );
define( 'NONCE_KEY',        'O}WB^0{.Y`:nE oz{`C#$o=4R>*%3Myj*k^kK`wRI)-]$hZ)%9L-3baG*oD^g=~n' );
define( 'AUTH_SALT',        'lhq~BbssE=m_3MStUXBn_nIWaF%$wMeH`hGNm$`HmT!/~F@|0$ dU5Qlq-{,G0M!' );
define( 'SECURE_AUTH_SALT', 'HBX&O0Ukn <O#f+2,U0-ebnXXovPWn-l:qd|v.JN<@?uw`! ~fbY%KX=hQCT^fM@' );
define( 'LOGGED_IN_SALT',   'Z|wpW% 5vW3:%iIO$(:7@B6E$rLr;#Ig;eIwI(!0e>F4pp>$Qt.6tv5-3mg$<v4k' );
define( 'NONCE_SALT',       'ZKznCn0BVesf2X<Zp_$fbF6yml=}PYX>E#;#v|p}49f:mNm/:S7z,UaIXydh5X+^' );

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
