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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cowtable' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WbY.hl9@}{3$F{Hl=$Y8LzEUGZ3$;%w@l1,bO6t|OD266r^/XKYU66 XQh;EA#;m' );
define( 'SECURE_AUTH_KEY',  '`=C0Fgz{fA4`nZ4gwi:I+_fL iqd3xB@Xo5v}meYl&fVndxA=i4g}OIU5IMK#T)Y' );
define( 'LOGGED_IN_KEY',    'X,j*Y1^}~z4a/rl7liRJ);23!l.jVU:ZJ3*=:usoUj[_qRp{@9$HZ)vmphn*Gf?W' );
define( 'NONCE_KEY',        'W(eg8Q*RC-GS%+OvtMm8pc|p]!@B2| e>_7lxA2N6XR,rC#SM!fiA_sTC&8Gu&O9' );
define( 'AUTH_SALT',        'i]mUo,*c^qhF;oOw3=igkULdGmY#(F(m$v%5WjPZC$,;DdATmiEJDl(JpEJ*Yzgf' );
define( 'SECURE_AUTH_SALT', 'E*7t.<fCO1Ks(JSr5h/Dxedo~ PEKe%>93zK](_s-M+T0zl&uH{SuEK4MsI<DNq4' );
define( 'LOGGED_IN_SALT',   '2P><Y5b$&1m;<_+RK}.Wmm[WofEmV=PK7N}m^NH =w<z,#?mR^JVw7# =l_B6WCR' );
define( 'NONCE_SALT',       'sn[:k=e[&{]pK8pPV)X6Q-Y@}Zytp,1AIz`}~KMTh|dUkqs}hoV2Wx4XIjS]*Jyh' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
