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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=h0,,!Y;F(jA/4X^2FjC7`Nk@fHFR$c<Z[m3&3|RT#=KP:q*B{wy|AFt|]}U)w?4');
define('SECURE_AUTH_KEY',  'C@v/-2H)OLYwb(+EIx7<k%Mse>;!dbm2p~<CCa|L+fLyD+-K~;o%o$y{@Mg/X?-5');
define('LOGGED_IN_KEY',    '%gKvW`uJl{=<j-@-u~C]JOM-@!gJtF$1:|]F&x|,I2_iboepKrodOZU,.DKrj}F&');
define('NONCE_KEY',        'Vg;y~`A/~H-!j51;Lpgh1>@ml-UR}-ht@JB)47*Nt+75!-F{%M)ig5/P|{u+:Kdv');
define('AUTH_SALT',        '2CA_T{bVL4|kYkH+yS>*-![3v?Y|UGpfR}/q OaR|h2|[<5M;j)zCR^MS/JzJfm|');
define('SECURE_AUTH_SALT', '+x-FsKr$3X9SiO*9fSFX4&}l-5|x}0EGtDFjL&|6lM0)NyswOdTX}_ KA|);=;R+');
define('LOGGED_IN_SALT',   '+Nk|iMGZA0$9+pfX|C@7oM%EsXI&1Sh%y+|<R=DH#1Mc8ico=<lB+D+Tr?N@1;^>');
define('NONCE_SALT',       'Z$mEQ5 ?Ncen{UI.}%oTx4S6{hrI,Q!!y6l?u;V{EO,(0E!|)Bl[yY j5|kJ913M');

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
