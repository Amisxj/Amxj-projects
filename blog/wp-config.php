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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'blog' );

/** Database password */
define( 'DB_PASSWORD', 'wmj15320747046' );

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
define( 'AUTH_KEY',         'jvJ?1amz}+O@U+I>~V^xj,%-Ah%s>=40,^qeV|OJT#1BI&@!]rMzNA|_5PF[LjZ?' );
define( 'SECURE_AUTH_KEY',  '0meSqxir3KWnMS}!,?q/GquL/Y]um:`]apFF&8xu0hk[^`:rd]?hXp}z]0l0 )*4' );
define( 'LOGGED_IN_KEY',    'v+uc^gxp<A47k%0i<Wzq:(?Uj&?%&Q`yRc:Q9q$Kg:@#B;:QY@5l31>vbjFZ{6!w' );
define( 'NONCE_KEY',        '(x,KII3PqIbBpTA}~BWe=D]`z!eLZw {R5dw*9$2+s8G qtjAciKlVKBCk3*iesq' );
define( 'AUTH_SALT',        'f~HNo-sNUDJRem-mbIl.v_l/gNrOo3B_FjsNjDbY?aVX?Z)Tzy}]lB({p39DBfeS' );
define( 'SECURE_AUTH_SALT', 'j{|LERtU%*0^LINP>&6e)9{!%o=q5pgS~zM@f@TbY^y>4l4nyAFeUo7)*tXR 1.%' );
define( 'LOGGED_IN_SALT',   '+9~96y8|mY5^fT#DXf~X.=l`NG#gh=Ol; Kw%]&FiSIU%x- YItw0Pwk:|Jf7@7H' );
define( 'NONCE_SALT',       '<7v(T+$afg{v%[Ncf5Z-,I?>#w?]m3AUSS-8dFmpLs%Ue92dS=6uZZyRD{1`%xbe' );

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
