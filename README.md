# Beta Release 22C
* Check on live connections the user agents from the users.
# Beta Release 22B - Early Access

# Changelog (Early Access):

* Added advanced manual channel order.
* Added bouquet ordering.
* Partial localisation.
* Various bug fixes.
* Updated GeoIP Database.
* 02:20 - Fixed bouquet bug.


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

# Update Script
apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && wget "https://github.com/senkron24/XtreamUI/archive/master.zip" -O /tmp/master.zip -o /dev/null && unzip /tmp/master.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
