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
define('AUTH_KEY',         'Ic)oiI?qf;vea@D?9F8662{aLNg%]L?hCqid1t>q_z<k K+z@QirYuA!a>3dUm[A');
define('SECURE_AUTH_KEY',  'jEK:Y;/EN2KvE%#HkCuYPQ~{6cNB;l+LMlPrskc[9aVpBxcC,pfLrlqEEvWX|m}8');
define('LOGGED_IN_KEY',    'Uh|F6v(:=/Q(f<(*8%?UrXBtyUU3Knc!EX+PlBO/^Hc_>6.?o2M2:l DnoTp1:u#');
define('NONCE_KEY',        '=`W)qhts_O4h3o%ukbEvvZU?rU<T!z2vaiQ{gBgx^m`-+{`|~GQGbte2P[2lul9T');
define('AUTH_SALT',        '<#:!}MC+nD-F/&g2Z-y])@tJmc21T8I2m]QO>$-+4+3ywn4uaY~Fxe.PhOKE*WK.');
define('SECURE_AUTH_SALT', '(1A7;A=ZKwR[Q:yMX$]x=?wcs_qaY/(_4Q a*{H+u/<^_ngJtA-F$GHPrXgyj[S[');
define('LOGGED_IN_SALT',   's$Zb?3RqUGK.{X|V=2rCprn703qv[BLvBb|JS1L3)`+Xu%Wpg(g!C%B2D-uv/?:K');
define('NONCE_SALT',       '5J&>>3rvq=:9NI+=[]D?Q:ZSPxk{nU@>}h **?<*fli{<:@ymV4~1DoGe[,0z|Yy');

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
