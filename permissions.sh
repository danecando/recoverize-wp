#!/bin/bash
#
# This script configures WordPress file permissions
#
# www-data is in rec group & rec is in www-data group
# umask 002 - permissions default to 775 & 664 (so group has write permissions)
# www-data has home directory and login for ssh keys (git etc..)
#

# config
WEB_ROOT=/home/rec/recoverize.com
WP_OWNER=rec
WP_GROUP=rec
WP_ROOT=${WEB_ROOT}/htdocs
WS_GROUP=www-data

# make sure user owns website root and all contents
chown -R rec:rec ${WEB_ROOT}

# www-data in owner group has r+w permissions
find ${WEB_ROOT} -type d -exec chmod 775 {} \;
find ${WEB_ROOT} -type f -exec chmod 664 {} \;

# sticter permissions on config file
chgrp ${WS_GROUP} ${WEB_ROOT}/wp-config.php
chmod 660 ${WEB_ROOT}/wp-config.php