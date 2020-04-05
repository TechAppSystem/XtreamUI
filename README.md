# Beta Release 22E

* Refined santisation for speed. No longer sanitises MySQL output, only input.
* Added STB lock reset to MAG Events for those who have issues with MAG devices.
* Added a timeout to mysql queries for those with too many user_activity entries for the page to load.
* Removed auto-refresh on user_activity as there are usually too many entries.
* Fixed sort functions on User IP's page.
* Fixed stream table on created channel page.
* Added a sanitisation script to scan the database for unsanitised input and correct it. Only needs to be run once (see below).
# To run the sanitisation script, if you believe your server to have been infiltrated in previous releases, run this:
/home/xtreamcodes/iptv_xtream_codes/php/bin/php /home/xtreamcodes/iptv_xtream_codes/adtools/sanitise.php

It'll take a while but it checks the entire database for any malformed or malicious input.



# if you have same problems pls use this for fix 

* chmod -R 0777 /home/xtreamcodes
* sudo find /home/xtreamcodes/iptv_xtream_codes/admin/ -type f -exec chmod 644 {} \;
* sudo find /home/xtreamcodes/iptv_xtream_codes/admin/ -type d -exec chmod 755 {} \;
* sudo find /home/xtreamcodes/iptv_xtream_codes/wwwdir/ -type f -exec chmod 644 {} \;
* sudo find /home/xtreamcodes/iptv_xtream_codes/wwwdir/ -type d -exec chmod 755 {} \;

# Beta Release 22C - 22D

* Fixed movie and episode adding, MySQL was parsing order as a command rather than column.
* Fixed various page bugs due to XSS parsing by implementing HTML Purifier.
* Fixed 2020 years not parsing in the python parser.
* Fixed EPG URL not parsing correctly due to XSS decode not being available.
* Fixed unicode line username and passwords not working.
* Fixed never for expiration date (NULL was being parsed as 'NULL').
* Fixed Restrictions not showing selected IP's or User-Agents.
* New bouquet will be added to end of bouquet list rather than beginning.
* Fixed bouquet ordering.
* Fixed missing action buttons on Stream page.
* Stream icon will show blank if not PNG, this is a limitation of no GD library.
* Moved Hash Load Balancers to Settings page under Streaming instead of forced.
* Added page to show User IP's per line for the previous Hour, 24 Hours or 7 Days.
* Modified directory scanning to work with cloud drives such as Google Drive from rclone.
* Added "strict" to Geo IP options.
* Added ISP to Activity Logs. Requires modifications to your main & LB's. Enable in settings.
* Many many bugfixes.
* More but I forgot...


# Early Access R22B:

* Fixed movies not showing in bouquet order.
* Fixed activity logs page.
* Added interactive connection statistics to dashboard plus cron. Enable in Settings.
* Added port selection to Install Load Balancer.
* Added ability to change port. Edit server, change the ports. Restart server afterwards.
* Added ability to reboot server instead of just restart services.
* Fixed newline in textareas.
* Changed year to appear in brackets instead of after a hyphen.
* Added option to extend sidebar in profile.
* Fixed various bugs.
* 70% translation completed... taking it's swweeeett time.
* Hidden expired MAG / Enigma passwords in reseller dashboard.
* 00:10 - Added current release to Settings page so you can stay up to date.
* Added advanced manual channel order.
* Added bouquet ordering.
* Partial localisation.
* Various bug fixes.
* Updated GeoIP Database.
* 02:20 - Fixed bouquet bug.

# Update Script
apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && wget "https://github.com/senkron24/XtreamUI/archive/master.zip" -O /tmp/master.zip -o /dev/null && unzip /tmp/master.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
