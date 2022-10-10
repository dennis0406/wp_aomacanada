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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'whatyouknowabout' );

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
define( 'AUTH_KEY',         'RXu@$pCu# kmBt~v^$i22x!$c<Ez:r7mGWCDpvm/l,FX.,e%Yd_,-wI)S~D7Z|I@' );
define( 'SECURE_AUTH_KEY',  'b_c@VF3;)2[KTe3JlhetSw>Zx2lCs/XI/[;ywx([u7O*5%um*6d(%A2}h[mgIJ1[' );
define( 'LOGGED_IN_KEY',    '8Ga.dOW#K2w103MJTx5+r@{N-BUYy*&ETjf[n&(,^J,[5a9{g>ndbc&&JBm&Bl$g' );
define( 'NONCE_KEY',        'SGTgxN{bCDZ{;E%|r:]2O69:KV6L<8V;0{?vvuif2YOID(jJ,|`i:O*D*DHJ[,Nm' );
define( 'AUTH_SALT',        'PW5W$`j6<CY]cb^5fi)4jE6mKwI@>:M?k6Aw(0QW<eGXc+rz0zB|Z{JncJ`3pD$9' );
define( 'SECURE_AUTH_SALT', 'R`d%/Iyj$&71?cn5Et)A,d:4M=;nN67VpY/1(|l4/)2:n*{pl!Dc/IFJ<SLw |X-' );
define( 'LOGGED_IN_SALT',   '7#E+ DHmQr<$|4wz!b;MGrz| L:oTw>dmM!+U/;@=J|ZYFg5rH+Yq=L+Cf-Xh8sJ' );
define( 'NONCE_SALT',       'QKD$q*f<3I&$,^&^e%e.cV/iSb(_1 U=YR~i4^E_I,w#^ =ea>>bNB+l*>02>~3!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'de';

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
