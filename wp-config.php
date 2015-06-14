<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'recoverize_wp');

/** MySQL database username */
define('DB_USER', 'recoverize');

/** MySQL database password */
define('DB_PASSWORD', 'Recoverize123#');

/** MySQL hostname */
define('DB_HOST', 'recoverize-wp.csvwjczm7muq.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'VXG?},?aFS]Q )W-lReHAUE2Z|1ubG!kx-w}J`|L bX]S9NB6vn*K.-[+^p|OhB|');
define('SECURE_AUTH_KEY',  'i=yaAiEKtlC+x+Ye:WTE,C_.:7=X|}jb?Toy`-.:+>Ajp^M!|NF3,LY*M-[EzUm`');
define('LOGGED_IN_KEY',    'uq#=#y%,(j*]&>eaSxt>rVn|buD{GnZ%@6}8#mp!cRI4dp@p$@xS#&M)7d8]X]ej');
define('NONCE_KEY',        'Po|ZU8g^M>w>k8iNi|Kz-]huy#aZsQ/9V+ D`30#2t7IDO(+8GD`v{;-8+xg+57R');
define('AUTH_SALT',        'P+LK|>!%6}qRy-ELWY.}{{f++l2w]9tp>Iak<ek6.{G6(2u~,EH+}2m@1cZMPbui');
define('SECURE_AUTH_SALT', 'kKDrCjoajK4* ^Yt/@lng.+_z#x|fkA/#|Lwsg|Ty4{wpSr#Z@mA+ZPp,#k)i)zh');
define('LOGGED_IN_SALT',   'LVrn y-6,2%Uwd_HL:pO{vc*H({TA@%I-];<?bb9e#|7D81h]M4-5+[?>Zo2Zryb');
define('NONCE_SALT',       '3E-u3ler{bEw8_$KhkuL!a-aEQiZ#Deb^h-,8z_l*.&W~j+r|J.e0Y%-1M%+RObD');

/**#@-*/

define( 'AWS_ACCESS_KEY_ID', 'AKIAIB6V74KVACMXQD3Q' );
define( 'AWS_SECRET_ACCESS_KEY', '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' );

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
