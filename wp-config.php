<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '147258');

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
define('AUTH_KEY',         'E!H:=vhb^M8o-p)NO$PMaxw_Q{}Y`/(o@ZZ{lim7>?!--:&,%>xI=p28z`A@,|NB');
define('SECURE_AUTH_KEY',  'Xr8X;^i?$gIG9?KFuWAOKNp?mVaZ)7KlFfQ;(d3doJDEq=7^M4`5JE1(G)k?wJ6k');
define('LOGGED_IN_KEY',    '@@nm[u6V3czo{E@Re AVZ9?H7}3CK^p#!K%@ .4BO+4@0~2=Wy@^@VnjxDb7gW }');
define('NONCE_KEY',        '}*ag.$:jMHN0gW5i/bqW6Ol?yQtQZmA^CXc;w(jF?cu+bB36Y3do#@`@? sz5FKC');
define('AUTH_SALT',        '*HK%I`}6>N~>EsL}Gcr;dCilj@DjkPBCcigO> cAJi!kJ,j{LycQZ`:LvFU=^D%G');
define('SECURE_AUTH_SALT', '/m_>).i?.IYmLq2t:Xr0wz_-sI6=l+_3<V^8<ff=[gNc.mATh+%j%S4Fu-XlVZ?(');
define('LOGGED_IN_SALT',   'Hs*7-38AtGDSipd8<g01|IG7N&/E,.&jRg^`P<KrJr:6<V4tKrdcXn0Z3mX<?pgV');
define('NONCE_SALT',       '.dw}seL9By.^5mS:E&q%NFm{x;&vPQ9DZ;:YPxz@93CLC}V|up2Nu6kZx8{5o-%<');

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
