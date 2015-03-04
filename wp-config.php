<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'matthieuposnic_bapwine');

/** MySQL database username */
define('DB_USER', '91428');

/** MySQL database password */
define('DB_PASSWORD', 'matthieu78');

/** MySQL hostname */
define('DB_HOST', 'mysql1.alwaysdata.com');

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
define('AUTH_KEY',         'L-$}FcMQX1|55MJ[-g3<biYs3jcOb*H<!R~b5p6_hO/k{B>ALSm.B-z>vbQ[&*2t');
define('SECURE_AUTH_KEY',  'uv:Z^lCFWx;dJ*r^hQl6,R|JP/]^S3m**3 3Fi&?&e?c|MiNXu#s5I[umSo`}/,D');
define('LOGGED_IN_KEY',    '6p<^u&) _$T~;|l7.?5<bR2o+F%+w:mhO1X(&5]Pe;,.QAt 8B:GG<&<MJu|_2cF');
define('NONCE_KEY',        ';pP:25B7sD/932OnAw4%>G+vH35DQ)n@eUNWjZgHs($v*f&P_L+$^+->-Ov8G>x#');
define('AUTH_SALT',        '}[):fo@:FR*Rui5uVzF?f9s]hi3O([cc8v:EoVsy|A|Q%^,qcNx#&|/=F4?lnyxX');
define('SECURE_AUTH_SALT', 'IL|D_x2=5PE]90*PT4>O9(/6,J-$7riI.||g}Kb+C?]#=Dd<7dv>y8|(+UOHuK) ');
define('LOGGED_IN_SALT',   'ANy3ZbL)Q8:ajlz`KaENIF7ft4y0^yPw(:yfz3aq)}Khl`g6h=?{v8kdplicZC,]');
define('NONCE_SALT',       '!9vh@mrIkO_#f`%/N-aL&{?,ugzf{%:{VOSUTzb1e1?+!9_+E^IXG-$WX.J1.~A*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
