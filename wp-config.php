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
define('DB_NAME', 'exam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']VXA[eHD`lHf|o|]DdACLB*T8[nf-+V(f@jE5.Q%#|vXB)>JM#}5@S;k_]K#.zVt');
define('SECURE_AUTH_KEY',  '][n+[Q!3Oq)YYvWx-+9 +Of/(*vn$C+}bJz=gC~M0vH?DIDrq.%jfvx0*+Mv-jC-');
define('LOGGED_IN_KEY',    '.XW:BJN%VRXEG|M]D)mTt`w${woeWntj-/iS]bHYjf4egpc4.+vf,|P4:G=y|`#>');
define('NONCE_KEY',        '<Go-iiqzLj}z:9X.=G|V@_Zh~vmQG(xltV1|oZ.z$d/n|rPb`r|<WcB$7>`ue|lp');
define('AUTH_SALT',        '[?A@]R]Y(Y-uNL=qwrzzD[O-+#,T&)flooz=C-6aBV+c+$0g1Y`6XGj3F+<GbC@E');
define('SECURE_AUTH_SALT', 'dOXaS;K@{ofN)JgTw%534;iKx.8Kx{Oy|c|MlH@-M<37o!b,#1meMg8Ktu3-.Fp?');
define('LOGGED_IN_SALT',   '` uhN|Q^~=|u_19~%8>pcZ2XOMYS]~:eL{w8@:MrmLE$B94u]LvRn<9;?iQ&n2pj');
define('NONCE_SALT',       ']F7yaAw#~ &@e:y-W-5E|<dGvl4l^SMYF3e5Vlx.x,[jAJq82J}h{{.{|-MJv~WJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
