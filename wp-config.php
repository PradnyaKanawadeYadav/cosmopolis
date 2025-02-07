<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nirman' );

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
define( 'AUTH_KEY',         '2O<|Zo;.]$Avp+*`+%YYExGKbfdQ;.-d?|)z1{L$)p@ADs/_b eC5.c7(Ii%3A98' );
define( 'SECURE_AUTH_KEY',  'zWg}cM^*s%/uK=QFkmi)9F./PgZ%WO ]gAx>.=bM-pPG$EfE$ `V~DVaYn^[ma|e' );
define( 'LOGGED_IN_KEY',    'AA59n@HnYJ=M zJg $. I S}H;d?)G y3/pi}DBunFfNT[pGE9< DGO@GO}hQt|J' );
define( 'NONCE_KEY',        '$wu@W_]15jlwl}-`./!?0m7o]pm9^4,h.RKRj)M5Lh1DE@7KK*I3G(pIv&;82kFZ' );
define( 'AUTH_SALT',        ',0W;]r$RGCg+}p%i6VGw2=ceuYk-&Kw(hogeZ:Gw7LFjw7~S6%V&qsqF4Z4abO+#' );
define( 'SECURE_AUTH_SALT', 'NI? H#?K4PVg<Ga%m3(?D!f2HP+=gn4CCeK8F7#D~ko,FT/_0kg9vG;)Ql(%YZGo' );
define( 'LOGGED_IN_SALT',   ';zM1HA~uS~J~xdbx7%#%.:~IpL4Yw%!&-(Z 3k}lz^Fvh$Z}+ Zz=F4YFW+8!;[M' );
define( 'NONCE_SALT',       'v(ywrOFD}Nd75RzrX{@Cem[ZJ<;PhGFW&q_Wb3.rs1iX+0g+F3;bf|tGD!+N~x-o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
