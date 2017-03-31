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
define('DB_NAME', 'welcomechapleWP');

/** MySQL database username */
define('DB_USER', 'sonofajones');

/** MySQL database password */
define('DB_PASSWORD', 'Afro_2334');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_K8EDG$?!{&$!rQ7H),{y8b[s!aFf;v~(I_!93L1HoO8|P>rsB/Ia~kO^SW^&Gfs');
define('SECURE_AUTH_KEY',  '-e]1>TGTYrZa$AHs(s%=TM(FNQMAp0Z5LG($aBKFpkYbIz</y^y>3O5LaGLT+hV}');
define('LOGGED_IN_KEY',    ' 3Re%2J{#F{C~8}HDf4H4=@ikEp`c&F$~.&9@O2lap=6[AoxNS97+F[A;Q3e,2ZE');
define('NONCE_KEY',        '7oMHbw*y]}u#C9_}nC0:(6JE~R3>{f*3/PKWmOz+AmOxsR5c<}$/)$|8xYfpAtbT');
define('AUTH_SALT',        'auOeHT$Heke&yp7(.=vb>CK?vUz0_v%]OmF-uF0`9,L@;4YJmeeY/MrAww%~TA z');
define('SECURE_AUTH_SALT', 'JB<s@`)v^t(L7|Lh(`Gwoll3wy(ZZ Y,y~DNmOW{g._Uh?}5JKC{Z=3sTRQPMEiU');
define('LOGGED_IN_SALT',   'R+h1Vo:Z#W/#.zIjpln>o5/`zPjF4GASJ&3~2&[7>Z=5%g~:<0.`QGPAWBptFd>;');
define('NONCE_SALT',       'b6@ywR_U4`#0bV-(IT6Sh4JtNz^2ep:nKl$XppDTa2H@VvQkn |tENDu*j;=AkJL');

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
