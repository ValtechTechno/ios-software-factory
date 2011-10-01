Prerequisites
- Apache 2
- mod_php
- perl 5

Edit httpd.conf and load module mod_php

Copy mobilestore.conf under /etc/apache2/other/ and edit the document root

Copy mobilestore under the apache document root
(/Library/WebServer/Documents on Mac OS, /var/www on Linux)

Check the file owners and permissions. The rake deploy task will attemp to create directories and copy bundles in mobilestore/apps.

Restart the apache server. The mobile store app list is now available at http://YOURSERVER/mobilestore.
