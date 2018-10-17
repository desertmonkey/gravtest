---
title: 'Setting Date and Time'
date: '19:36 17-10-2018'
twitterenable: true
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
musicalbumenabled: false
productenabled: false
product:
    ratingValue: 2.5
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
facebookenable: true
---

Setting the time zone, <ac:structured-macro ac:macro-id="ec38d70c-b890-47c5-9e07-69d8cabeab02" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">monitoring</ac:parameter></ac:structured-macro>date and time requires root privileges; use `sudo`.

## Contents

[TOC]

## Set the Time Zone

You can use one of two methods to set the time zone on the switch:

*   Edit the `/etc/timezone` file.
*   Use the guided wizard.


!! With this unit file override present, changing NTP settings using NCLU do not take effect until the DHCP script regenerates the alternate NTP configuration file.

## Related Information

*   *   [Debian System Administrator’s Manual – Time](http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html)
    *   [www.ntp.org](http://www.ntp.org)
    *   [en.wikipedia.org/wiki/Network_Time_Protocol](http://en.wikipedia.org/wiki/Network_Time_Protocol)
    *   [wiki.debian.org/NTP](http://wiki.debian.org/NTP)
