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
define('DB_NAME', 'callcard_admin_W');

/** MySQL database username */
define('DB_USER', 'callcard_admin_P');

/** MySQL database password */
//define('DB_PASSWORD', '0NCflnZTq4');
define('DB_PASSWORD', 'aOw7tRECJS');

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
define('AUTH_KEY',         '~?eb^LN/0p!kG+,f!s2G&(C>;+[Ht+OLPARB0*9(c{0Fj^ ,v$eozBP:|DZ:fO0Z');
define('SECURE_AUTH_KEY',  '}#Ro6ix=%<1z@d*[t<tzi,qw?Twp+A8.]cMO$&xCR@[uQ`P!6<l(Y!QB@ ]Z+uA*');
define('LOGGED_IN_KEY',    ',3ADL)@,OH{7LT~8?W(86v<YFv+)r H*$)*4T;|@gp^8HR 54Gcjs8Z*Fpi1korE');
define('NONCE_KEY',        'gX *yO&w]cW/t~nXO%Q|.~~M%T.e3Sk}egzgP_3*c1m~R[O&uY4ZY|mD(R.3#P,o');
define('AUTH_SALT',        'ZTdi~:ja]DiH<M&uDo0hc$|.7.JjOK~1zkvMVZG9]nVhFQSJRQ!8,x]t %;1?aq%');
define('SECURE_AUTH_SALT', '`R[r0;/g(YzNZN$dX_jEk%m3)j88hZ}nCEt=se),(}VDTi87C*v?k]pKFbP*Ya?W');
define('LOGGED_IN_SALT',   'd.It;Vg]Q%ygM/X8<5$65S5S|vM6B>sLu $&8*^pF:$8;!j6`(:4|E{c{`<7j@ZM');
define('NONCE_SALT',       '(n,X!g9(6XMYRyfG03>Nf=]ghw/?:cOm,Z1w3^vEqcS7%F8]wgQ8aQtH;*2Ho9by');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_12';

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
