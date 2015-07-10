#!/bin/bash
#
# This script configures WordPress file permissions based on recommendations
# from http://codex.wordpress.org/Hardening_WordPress#File_permissions
#
<<<<<<< HEAD
# Author: Michael Conigliaro
#
WP_OWNER=dane # &lt;-- wordpress owner
WP_GROUP=dane # &lt;-- wordpress group
WP_ROOT=/home/dane/recoverize-wp # &lt;-- wordpress root directory
=======

WEB_ROOT=/home/rec/recoverize.com
WP_OWNER=rec # &lt;-- wordpress owner
WP_GROUP=rec # &lt;-- wordpress group
WP_ROOT=${WEB_ROOT}/htdocs # &lt;-- wordpress root directory
>>>>>>> 9b103dafc76d25a181d294d4ecaa967385245a14
WS_GROUP=www-data # &lt;-- webserver group

# reset to safe defaults
find ${WP_ROOT} -exec chown ${WP_OWNER}:${WP_GROUP} {} \;
find ${WP_ROOT} -type d -exec chmod 755 {} \;
find ${WP_ROOT} -type f -exec chmod 664 {} \;

# make sure repo is writeable
<<<<<<< HEAD
find ${WP_ROOT}/.git -type d -exec chmod 775 {} \;
find ${WP_ROOT}/.git -type f -exec chmod 664 {} \;

# allow wordpress to manage wp-config.php (but prevent world access)
chgrp ${WS_GROUP} ${WP_ROOT}/wp-config.php
chmod 660 ${WP_ROOT}/wp-config.php
=======
find ${WEB_ROOT}/.git -type d -exec chmod 775 {} \;
find ${WEB_ROOT}/.git -type f -exec chmod 664 {} \;

# allow wordpress to manage wp-config.php (but prevent world access)
chgrp ${WS_GROUP} ${WEB_ROOT}/wp-config.php
chmod 660 ${WEB_ROOT}/wp-config.php
>>>>>>> 9b103dafc76d25a181d294d4ecaa967385245a14

# allow wordpress to manage .htaccess
touch ${WP_ROOT}/.htaccess
chgrp ${WS_GROUP} ${WP_ROOT}/.htaccess
chmod 664 ${WP_ROOT}/.htaccess

# allow wordpress to manage wp-content
find ${WP_ROOT}/wp-content -exec chgrp ${WS_GROUP} {} \;
find ${WP_ROOT}/wp-content -type d -exec chmod 775 {} \;
find ${WP_ROOT}/wp-content -type f -exec chmod 664 {} \;

# allow write to logs directory
<<<<<<< HEAD
chmod 775 logs
=======
chmod 775 ${WEB_ROOT}/logs

# allow write to cache
chmod 777 ${WP_ROOT}/wp-content/cache
>>>>>>> 9b103dafc76d25a181d294d4ecaa967385245a14
