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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wproot');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/Df3(r3~nQE/*SBr|Szuoex7`Z(N)B?q{1xt*;E!>SFJUx@tFNCY|I!XybN||*_l');
define('SECURE_AUTH_KEY',  'Vq93L;)JTfJT]8$.vYw&Q~T`[9R$fh|-J/3G64i`?h*zqnObY4Lgtv^2vEyiC Ce');
define('LOGGED_IN_KEY',    'hqj.y,zkrh.)@Y*H#jO%uw)($(yOQ;0)0,o]/Kx$Ilg`:U]FO.5_RiX,OxYt8ZgM');
define('NONCE_KEY',        '==Kt2-adXdxLJI9,v. So?H[Jrbys4<)Hk{$5*{S_Z7k5&F&EKhED]e8^):QDIA)');
define('AUTH_SALT',        'F`>cmXIQd?~&Z`}D#&eAAqvv+HX]r/_}{%NO,rwd,/AorXP[BI~{3[t ##4;8tU$');
define('SECURE_AUTH_SALT', 'Z@7tVmt7;{.{OATJ)Dy`lHOWxRd^dK%S6_?)LnS)P,:2d%F( PQJq!X~#P2<F:tI');
define('LOGGED_IN_SALT',   'YLW}%{4n~;O:N}4!-c+jO}*5BmAFe4Pn^ACGlg6P,dhIFw.<z!?gLJE0L43H|pe#');
define('NONCE_SALT',       ':d;805M!jNETsVQEPyogrpq9F=#9-#o#:FAp@!f=k?)>`ZU|J|s9oM3W<d~K(_Vz');

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

