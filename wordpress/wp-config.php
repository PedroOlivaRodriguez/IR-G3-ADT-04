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
define( 'DB_NAME', 'personalizadospunisher' );

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
define( 'AUTH_KEY',         'IM6W AI>Gi;8N[}iam*/6fkoi{}!J2Wt{|.5Xz2l_OM0~zm{Jf;~5ABr7K{dj-$*' );
define( 'SECURE_AUTH_KEY',  '$[+Id>+GmT(6+]=&A-HU~l|svEDX 5Cr:REG^K$%;$oZ4YLET|O8mL*@_!9AU-Nv' );
define( 'LOGGED_IN_KEY',    '+&whnzrt~u$U(5&>7IILqJHh}MDe-1|M}Ro0gh+Xll,Z>=C3.<slkZRi#&6p~`Y0' );
define( 'NONCE_KEY',        'c!XI+vPv*utJ$O<]Q%Pc>b:#v;Sw1$bI9#|shD:q!pP;hdyxh##TgLIB1uPYlXjk' );
define( 'AUTH_SALT',        '/cF^-;[hHgA&D`ZX%X{1gV%JGRgAcl bpou GX06Li5Bf>KSJw-/{} :SpFZl!3g' );
define( 'SECURE_AUTH_SALT', 'Yvz@ye<aQiF%0T<fyp|:4pEM6#=pmK<4di.O8}f&z#9 vv)0Pz&sztZlM_S? $vp' );
define( 'LOGGED_IN_SALT',   'WwHb>U,My|$(l7jj2Lr3q.13/Qp$#(hY!0j4_=2N} oRGe#%wLR*/&9[4~Wf%;z}' );
define( 'NONCE_SALT',       '22}&,;2A&hl(!lsCy[d@ISCzsxP+o.Ny}XPyk%LY>p)76Ju!k+!}!n9DMoB1ktXZ' );

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
