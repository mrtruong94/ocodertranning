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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'gmgxF,9/iby2p[P1MTEb4|D[T~|cC-je ]}UIQn/TpuD?X{U~lPLm8op2Pn(Q!D(');
define('SECURE_AUTH_KEY',  'OC?T]/6SE1}dUaz|B5-:g6>B-ejie+yHAG$`/;4kO9Pl(AC|m*dRfsS<OB7x{6*q');
define('LOGGED_IN_KEY',    'YV-l to/vi&dqP$4:I)RP4R/{fPxhEE9{9c_*bNh-5}~32,-Us*;;%V[]W+71MVc');
define('NONCE_KEY',        '&b.7e1i{hG&-+ZC)&^mkT%|sN_6$~Vr5PJ3HKLLPSnHgzsKX<CJ<5L:EI7TWn`Wr');
define('AUTH_SALT',        '7k=Jm=+F*+WzxL!~DPZc?XS<2hW=M[+LH?3V;;3w7%eriq`Z-t;4}84&`Bs!>lrR');
define('SECURE_AUTH_SALT', '{,qjtG)62KV^KAD&bwD0`|(B==w7E83~o7t&||Ule3QFtiuJz2[j?V7Zw_%PT<:=');
define('LOGGED_IN_SALT',   '2+,tw#aEG21t>laJ^F+unT+P6X%hu|T9W]6=K.Hqk!OwY3mE!M++#8;6-E]du.%<');
define('NONCE_SALT',       'f|s!H(.lR[pronBOVV6q>h=J?&WZU.=kh0[v_$Mb|)X_QGqj:!)WO6sC lF~k>5c');

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
