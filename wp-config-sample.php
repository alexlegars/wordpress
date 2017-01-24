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
define('DB_NAME', 'a_prendre_en_main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:9000');

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
define('AUTH_KEY',         'rgE-n-#e=NH._+U1()yj:.%veURIz++iTV0em;~{=bb~bxn7s+mgi*~lr4p!H+&y');
define('SECURE_AUTH_KEY',  '(m3,@g,?CCX}<xzpkYQ(z^FXs/ue/giV;%r/,@#h}w+WFUToMNYl>My]Yq2g`<[}');
define('LOGGED_IN_KEY',    'g|+Y(Z9-By*R5G>N8,4F|^|+Dwujd+h[C5xG(3)+S^D;6u=L:_DQun!/=]D|jCuh');
define('NONCE_KEY',        'i0I:n;+.SbTdBb1|oK_P4WvY3rlj+C>|DM&>,=|nDcp)aiM>@v4BF/us+rqL{|IN');
define('AUTH_SALT',        ';!i8~k/U{--A,*7Em/I-;Et-c7-M5+g%%Ex{w7!FP^qPLKQ=`r-5@seysS.(2,|3');
define('SECURE_AUTH_SALT', 'W=5zj/[TD(@f(J<t.4K7}q`q[Hi)V*;--G9v-|]8hd3ai9PUNT+a&|b)7?!7%_^l');
define('LOGGED_IN_SALT',   'ek~-Jr;*7xHoJ7h;!:.&&|Z+qBd!_$:a%:Wfc#pQf&!XN]``xO+#6A=GC>o[[mc|');
define('NONCE_SALT',       '7;2?mHZi&^n+cgT{[o[7$Kh[Mb^@ju9Dp$*Uzqq Ij-9+pIaePE->+?vL41wmgjK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aprendreenmainwp_';

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
