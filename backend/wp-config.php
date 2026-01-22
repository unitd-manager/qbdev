<?php
define( 'WP_CACHE', true );


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

define( 'DB_NAME', 'srv9_qbotica_dev' );



/** Database username */

define( 'DB_USER', 'srv9_qbotica' );



/** Database password */

define( 'DB_PASSWORD', 'Fv4kh@F=4-.E' );



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

define( 'AUTH_KEY',         '8)jH<n3l{:^NI Wi.giEQ7r?AzoE{-ZWZ#u8e]+5z+B. sg@;|Y6+o7K<m6P!!v0' );

define( 'SECURE_AUTH_KEY',  'RqD7HsO$*L]2be~$#nb7 |{:d{n5 $(XD9lS0MmdMoX-_-nj@$B-IF&LHR9oan-:' );

define( 'LOGGED_IN_KEY',    'r$X`A!]J,<vO/lWd_E1xqh.Q/Tt,@9zaeF%=d:`TQ<w1]>rq~v#H4E%AvYayo,K6' );

define( 'NONCE_KEY',        'e0Ss4:&:i(kiXA&b!_]m59[[F fA_O$0zn6do |D_)(yTv9ZS%LA9%;mqR5^^^P;' );

define( 'AUTH_SALT',        '?rk>1{^kplp&q0`Hy:$<G8NJ3t&(l%V {Va07duSi5r=g[rs8iCL3^zV-s4zeuVv' );

define( 'SECURE_AUTH_SALT', 'YPAjr608jkRYOo.qqp|SdCb,Qzl632m2K&ZxT.t!.=`%%Xx<+X|X0syCQt#lE`Z_' );

define( 'LOGGED_IN_SALT',   '8g+YxL5w1{:uM)SDEb.e8$(a3]7V1Huq%4Il#(XdXtadFdSM!yt]7]>S`v1@d;Z_' );

define( 'NONCE_SALT',       '*mz:aU_&lo.4$PiGYto%{~UWq&:,-X1gYBR< CbtFaRu)tW4m6D #qTT4|`[d,=G' );



/**#@-*/

define('JWT_AUTH_SECRET_KEY', '12345679!@#$');
define('JWT_AUTH_CORS_ENABLE', true);

/* That's all, stop editing! Happy publishing. */


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

$table_prefix = 'qbo_';



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


define('WP_POST_REVISIONS', 3); // Keep only last 3 revisions

