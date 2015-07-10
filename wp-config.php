<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'recoverize-wp');

/** MySQL database username */
define('DB_USER', 'rec');

/** MySQL database password */
define('DB_PASSWORD', 'Recoverize123#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'x5a7+lx;o%/[BV@ S`}73dhb|P=Ce]?Aky;]-l%_}}c!+;B8t~&NE)@j7 iYk5uM');
define('SECURE_AUTH_KEY',  '76s%;(r=mUrU{Z!E||^a[c<89cU,k~a]~2%E1Upf4e5bU-%JncWbSr9^4: J#HS6');
define('LOGGED_IN_KEY',    'y|%wY~M]wL.j?a#WXZ:|WL#g&B~Y_h:gMT&^Mw|Pd9K-Zs-->!#Fu-_;1%-O(K]f');
define('NONCE_KEY',        'r-K1Hy-]vN`CHG|wDt+dZ9ENYUB+rIMoUn:Nv<<|#gySV* +7;<_EM7M!YnC-O&D');
define('AUTH_SALT',        'so^tWtTPY_{)K)m%l:?o&=(L1u|WAZI/bXf}+/fy: Fmk#3WWqykw<p|$1,L2O`<');
define('SECURE_AUTH_SALT', '8[b*as;?@E@9<hD}Njq]uWKxP+{}-bB<9$0{!v5*Y)8FStTa+jkt65TaBKN+u@U-');
define('LOGGED_IN_SALT',   'dA6rtqFq+}4fW#T!QMa3>^E&+|hbNZSYVD|M+]UXLHavC+d?YwkrC+RMwz+KiT^1');
define('NONCE_SALT',       '?G^(Pw&]Tg}nh /2E@p&~m:l]VCJJ.p?lMnZjqek/Z_p1ck~ ;n-(-I:%A+D34Q;');


$table_prefix = 'wp_';


 

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
