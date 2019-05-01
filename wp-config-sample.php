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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '6d2k9qcpV8jULmJ');

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
define('AUTH_KEY',         '<Pt:+/Y9c}5{:(,->~G> -ITi#!aV>ZCmPZylIwE(YlkzJD6t4{Wz}hSM V)o0+8');
define('SECURE_AUTH_KEY',  'AaC@L0ZEk`rm J@. a|=LUXVC<4tySXgEa$</3G7+;u;[/|teIg3.T+qnP:y(j1+');
define('LOGGED_IN_KEY',    '/AY`J/q}}@g:Y/,9E0,9&k@gb,V^;`3(dr)9;Fo>?,$jN/eU%&e5@UI@+7bLybaz');
define('NONCE_KEY',        'Cu+Lw:$/n^21WyK6.CUE-;ExWmS|+ .TW?L*1M/<VuZ&<EZo-RqqSpgCIM$xLDb;');
define('AUTH_SALT',        't2*UVvK.[LN~<9+SNZ}uMQ=c{>r- xN|vvu4ym]KMm=vcba1+@3* (-q<7+mNVg=');
define('SECURE_AUTH_SALT', 'aGlaiVTDoNwK7+]K7hUIP+icGy`bRRB_s+&#XY2P=COQrl3Aq8ZrB@Zfz$(/ZdI~');
define('LOGGED_IN_SALT',   'oGsFVCbY9xG!}s#;5-xBZ}uW3t9C^Md@0rn!J}9V{o!LiI?sG|.tx-av;V+ ZBX!');
define('NONCE_SALT',       'q_Z!KX-IBXG&+uY ~pF}-~m*%<A6+Q0sb-6v_{W8H,;+TGn=HzHJ^FDj%.I&&jZO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bsdb_';

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
