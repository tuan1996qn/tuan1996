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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         '^>Ym*Vjl#{5&k# ~q6A%JA/~Huh9@N1C*a[,-)Q=Wk*#9mSoL2~Z/7S2MIC>wj|:');
define('SECURE_AUTH_KEY',  '}%h~b}h/LKC0LzJC;XJ48na!9:>yIqCJU-*O-=~?%u+!MxD_+A=heu1o]G/KEdA1');
define('LOGGED_IN_KEY',    '~!J=zHh534jAAUqx!xW2vpN0#uR`pgAL7CReZ8D&^908,,_@nwJw3&]h]!dnuDZp');
define('NONCE_KEY',        '*{,FkW.3%K9h|<QdG?3+=[jQ@]K;Zm-/.XzuhAh2Ns6k{v!~F8PrVsOP3o%*kcW|');
define('AUTH_SALT',        '5:Q^^nP%VD 5;8t<N>CbL{b76A?wu>sH_A~#f>BcU<,fE8:ppdlk9i3Si4a`r8oI');
define('SECURE_AUTH_SALT', 'bC,+aV ^)F.C k/:.c{O rYrYo&HP{>x3kin0/>zL8]GouYtK y,yd-09BrPe+aS');
define('LOGGED_IN_SALT',   '3akZx.=v?8GTNGIU*l#%s)X@Ft#U;rP~;44pFQjI^y?xk_f{<}@uB|1L8/?`wwfR');
define('NONCE_SALT',       'a;|U[iJ=AAJ5auu=,L|yU5XAJz_taP@%UQ3_uvpKF{/.yHqJQm-R-dR(oW|3Ya$n');

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
