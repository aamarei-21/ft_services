<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'aamarei' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aamarei' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'CQTm`RS*jgC|z9Rd)dY<-vK|9qx1?7fQO50O?xm+LrPc|sTn.@FK{ Ubo.I+PdL#');
define('SECURE_AUTH_KEY',  'S<c:(^D)Xp]cFj*oPZ8&VXz+BfPM~mnVr2j*W/M{&~,<iRh0P,=G,XX_pM=U;3H_');
define('LOGGED_IN_KEY',    '$ct=#s+|<3Noa#[kFpYTQ~TzE|~juL!vzrmTS@9Wmx<>U&-C8ErTeS{X*`+,E{MK');
define('NONCE_KEY',        '!*cip3C6ZOFT0ayC>nny|i}0P(xi&Uy=#=i+5[B-gN[T_^>VrM5.9EEA`c%t/>vm');
define('AUTH_SALT',        'zcX)lUtUZQ;]gdf_Cta5J|S2}3VbV4*yWrv~YIF&hX<B~vtS7YNC!#q59H*K>)DG');
define('SECURE_AUTH_SALT', 'aZw++ hz{+~WiOtFw4oO7?p#Bou:W+0~Ee:~EfGi++|&E4DE~YyZl*5V7[c;X5oa');
define('LOGGED_IN_SALT',   'Er_*%ffaD0TEswZV0%Rw^C5V@;^+*8?t+F[VTsb d:t#jiJ}8Jv~n+M(X^Ml6TZP');
define('NONCE_SALT',       '+FH$-VA& D;MypSji/i5[V_Gr9I+CG)#^BU+*b<DY(d+-::lC;3Dg#O d>@PXcNU');

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