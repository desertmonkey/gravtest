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

<ac:structured-macro ac:macro-id="20e3ea67-2567-4ca5-b8f2-3952666ea51e" ac:name="expand" ac:schema-version="1"><ac:parameter ac:name="title">This topic describes ...</ac:parameter><ac:rich-text-body>

<ac:structured-macro ac:macro-id="b8882c3b-ba4e-4614-be11-fa411a6bafa0" ac:name="toc" ac:schema-version="1"><ac:parameter ac:name="maxLevel">3</ac:parameter><ac:parameter ac:name="exclude">Contents</ac:parameter></ac:structured-macro>

</ac:rich-text-body></ac:structured-macro>

## Set the Time Zone

You can use one of two methods to set the time zone on the switch:

*   Edit the `/etc/timezone` file.
*   Use the guided wizard.

### Edit the `/etc/timezone` File

To see the current <ac:structured-macro ac:macro-id="78fe8096-9ff2-495d-bc6a-99215d2c01bd" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">time zone</ac:parameter></ac:structured-macro>time zone, list the contents of `/etc/timezone`:

<ac:structured-macro ac:macro-id="24ae18d6-b43a-4396-a448-e2e8fd49c349" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

Edit the file to add your desired time zone. A list of valid time zones can be found at the following [link](https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).

Use the following command to apply the new time zone immediately.

<ac:structured-macro ac:macro-id="65ca78a1-3bd8-44e8-add7-778be57cafde" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### Use the Guided Wizard:

To set the <ac:structured-macro ac:macro-id="cd9cff42-dc14-4cd2-9cb1-3a2181965515" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">tzdata</ac:parameter></ac:structured-macro>time zone using the guided wizard, run <ac:structured-macro ac:macro-id="529fe649-4a72-4d61-a5ca-492eed800d50" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">dpkg-reconfigure</ac:parameter></ac:structured-macro> `dpkg-reconfigure tzdata` as root:

<ac:structured-macro ac:macro-id="88267cb3-0cdd-4dc8-9bb1-52e1f97aa936" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

Then navigate the menus to enable the time zone you want. The following example selects the <span class="pre">US/Pacific</span> time zone:

<ac:structured-macro ac:macro-id="c99f1f55-1cb6-4b76-8e01-76a6e273d764" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

For more info see the Debian [System Administrator’s Manual – Time](http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html).

## Set the Date and Time

The <ac:structured-macro ac:macro-id="ef68d180-9496-467f-91da-ca22233696a9" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="secondary">setting</ac:parameter><ac:parameter ac:name="primary">date</ac:parameter></ac:structured-macro>switch <ac:structured-macro ac:macro-id="f072a18a-74a8-47bc-a09e-a82724f9322a" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="secondary">setting</ac:parameter><ac:parameter ac:name="primary">time</ac:parameter></ac:structured-macro>contains a battery backed hardware clock that maintains the time while the switch is powered off and in between reboots. When the switch is running, the Cumulus Linux operating system maintains its own software clock.

During boot up, the time from the hardware clock is copied into the operating system’s software clock. The software clock is then used for all timekeeping responsibilities. During system shutdown, the software clock is copied back to the battery backed hardware clock.

You can set the date and time on the software clock using the `date` command. First, determine your current time zone:

<ac:structured-macro ac:macro-id="0a91350d-5e82-4b6e-a782-5f3fadcc33ff" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro><ac:structured-macro ac:macro-id="c1dac240-7ee3-4c14-9c73-39fd4fceb153" ac:name="note" ac:schema-version="1"><ac:rich-text-body>

If you need to reconfigure the current time zone, refer to the instructions above.

</ac:rich-text-body></ac:structured-macro>

Then, to set the system clock according to the time zone configured:

<ac:structured-macro ac:macro-id="cb26ff0d-9807-4c58-b19e-b330cf421f18" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

See `man date(1)` for more information.

You can write the current value of the system (software) clock to the hardware clock using the <ac:structured-macro ac:macro-id="f30d3f0c-9a55-4ea4-bf1a-d7ff531ed0ce" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">hwclock</ac:parameter></ac:structured-macro> `hwclock` command:

<ac:structured-macro ac:macro-id="28d2f8b9-17a3-4f18-9dc4-086b48ba4b03" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

See `man hwclock(8)` for more information.

You can find a good overview of the software and hardware clocks in the Debian [System Administrator's Manual – Time](http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html), specifically the section [Setting and showing hardware clock](http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html#s16.2).

## Set the Time Using NTP and NCLU

The <ac:structured-macro ac:macro-id="a42148f6-5f5a-464d-bca6-de9a298f2514" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="primary">ntpd</ac:parameter></ac:structured-macro> `ntpd` daemon running on the switch implements the <ac:structured-macro ac:macro-id="45bf320d-7752-4cc7-8908-df88f2c0178c" ac:name="index-term" ac:schema-version="1"><ac:parameter ac:name="secondary">time</ac:parameter><ac:parameter ac:name="primary">NTP</ac:parameter></ac:structured-macro>NTP protocol. It synchronizes the system time with time servers listed in `/etc/ntp.conf`. The `ntpd` daemon is started at boot by default. See `man ntpd(8)` for `ntpd` details. You can check [this site](http://nlug.ml1.co.uk/2012/01/ntpq-p-output/831) for an explanation of the output.

By default, `/etc/ntp.conf` contains some default time servers. You can specify the NTP server or servers you want to use with <ac:link><ri:page ri:content-title="Network Command Line Utility - NCLU"><ac:plain-text-link-body></ac:plain-text-link-body></ri:page></ac:link>; include the `iburst` option to increase the sync speed.

<ac:structured-macro ac:macro-id="7595c2ea-6a0a-4f2d-aeb1-70206a3b0f92" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

These commands add the NTP server to the list of servers in `/etc/ntp.conf`: 

<ac:structured-macro ac:macro-id="6b03c5a3-6bc7-4efd-b2cd-e692fabe19bf" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter> <ac:plain-text-body>server 0.cumulusnetworks.pool.ntp.org iburst server 1.cumulusnetworks.pool.ntp.org iburst server 2.cumulusnetworks.pool.ntp.org iburst server 3.cumulusnetworks.pool.ntp.org iburst server 4.cumulusnetworks.pool.ntp.org iburst]]></ac:plain-text-body></ac:structured-macro>

To set the initial date and time via NTP before starting the `ntpd` daemon, use `ntpd -q`. This is the same as `ntpdate`, which is to be retired and no longer available. See `man ntp.conf(5)` for details on configuring `ntpd` using `ntp.conf`.

<ac:structured-macro ac:macro-id="efefb15b-8922-4d32-9227-561f1a3c9b1b" ac:name="note" ac:schema-version="1"><ac:rich-text-body>`ntpd -q` can hang if the time servers are not reachable.</ac:rich-text-body></ac:structured-macro>

To verify that `ntpd` is running on the system:

<ac:structured-macro ac:macro-id="9654a8a3-3448-42d1-bb52-559c3415a386" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

To check the NTP peer status:

<ac:structured-macro ac:macro-id="65918532-0d4c-4bd7-8cad-431d160a9b78" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

To remove one or more NTP servers:

<ac:structured-macro ac:macro-id="6eb6578f-b05f-4100-bdb8-064939fa464d" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

## Specify the NTP Source Interface

You can change the source interface that NTP uses if you want to use an interface other than eth0, which is the default. 

<ac:structured-macro ac:macro-id="b49e9ec3-18f7-45a1-bee6-923231693da7" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

These commands create the following configuration snippet in the `ntp.conf` file:

<ac:structured-macro ac:macro-id="26d31049-13be-443a-9cc9-25cd4106e457" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

## NTP Default Configuration

The default NTP configuration comprises the following servers, which are listed in the `/etc/ntpd.conf` file:

*   server [0.cumulusnetworks.pool.ntp.org](http://0.cumulusnetworks.pool.ntp.org) iburst
*   server [1.cumulusnetworks.pool.ntp.org](http://1.cumulusnetworks.pool.ntp.org) iburst
*   server [2.cumulusnetworks.pool.ntp.org](http://2.cumulusnetworks.pool.ntp.org) iburst
*   server [3.cumulusnetworks.pool.ntp.org](http://3.cumulusnetworks.pool.ntp.org) iburst

The contents of the `/etc/ntpd.conf` file are listed below.

<ac:structured-macro ac:macro-id="d81ba5f4-fea6-4f06-a580-b0bcba952b54" ac:name="expand" ac:schema-version="1"><ac:parameter ac:name="title">Default ntpd.conf file ...</ac:parameter><ac:rich-text-body><ac:structured-macro ac:macro-id="feab493d-dd5e-411e-af30-8f52607edf53" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter> <ac:plain-text-body>server 0.cumulusnetworks.pool.ntp.org iburst server 1.cumulusnetworks.pool.ntp.org iburst server 2.cumulusnetworks.pool.ntp.org iburst server 3.cumulusnetworks.pool.ntp.org iburst # Access control configuration; see /usr/share/doc/ntp-doc/html/accopt.html for # details. The web page <http: support.ntp.org="" bin="" view="" support="" accessrestrictions=""># might also be helpful. # # Note that "restrict" applies to both servers and clients, so a configuration # that might be intended to block requests from certain clients could also end # up blocking replies from your own upstream servers. # By default, exchange time with everybody, but don't allow configuration. restrict -4 default kod notrap nomodify nopeer noquery restrict -6 default kod notrap nomodify nopeer noquery # Local users may interrogate the ntp server more closely. restrict 127.0.0.1 restrict ::1 # Clients from this (example!) subnet have unlimited access, but only if # cryptographically authenticated. #restrict 192.168.123.0 mask 255.255.255.0 notrust # If you want to provide time to your local subnet, change the next line. # (Again, the address is an example only.) #broadcast 192.168.123.255 # If you want to listen to time broadcasts on your local subnet, de-comment the # next lines. Please do this only if you trust everybody on the network! #disable auth #broadcastclient # Specify interfaces, don't listen on switch ports interface listen eth0]]></http:></ac:plain-text-body></ac:structured-macro></ac:rich-text-body></ac:structured-macro>

## <ac:structured-macro ac:macro-id="f00492e8-11d0-4178-99a1-bbd140157ecf" ac:name="anchor" ac:schema-version="1"><ac:parameter ac:name="">PTP</ac:parameter></ac:structured-macro>Precision Time Protocol (PTP) Boundary Clock

With the growth of low latency and high performance applications, precision timing has become increasingly important. Precision Time Protocol (PTP) is used to synchronize clocks in a network and is capable of sub-microsecond accuracy. The clocks are organized in a master-slave hierarchy. The slaves are synchronized to their masters, which can be slaves to their own masters. The hierarchy is created and updated automatically by the best master clock (BMC) algorithm, which runs on every clock. The grandmaster clock is the top-level master and is typically synchronized by using a Global Positioning System (GPS) time source to provide a high-degree of accuracy.

A boundary clock has multiple ports; one or more master ports and one or more slave ports. The master ports provide time (the time can originate from other masters further up the hierarchy) and the slave ports receive time. The boundary clock absorbs sync messages in the slave port, uses that port to set its clock, then generates new sync messages from this clock out of all of its master ports.

Cumulus Linux includes the `ptp4l` package for PTP, which uses the `phc2sys` daemon to synchronize the PTP clock with the system clock. 

<ac:structured-macro ac:macro-id="efba8c5b-474a-4074-8db3-50fedd07c6b4" ac:name="note" ac:schema-version="1"><ac:rich-text-body>

*   Cumulus Linux currently supports PTP on the Mellanox Spectrum ASIC only.
*   If you do not perform a binary (full image) install of Cumulus Linux 3.6 or later, you need to install the `ptp4l` package with the `apt-get install ptp4l` command.
*   PTP is supported in boundary clock mode only (the switch provides timing to downstream servers; it is a slave to a higher-level clock and a master to downstream clocks).
*   The switch uses hardware time stamping to capture timestamps from an Ethernet frame at the physical layer. This allows PTP to account for delays in message transfer and greatly improves the accuracy of time synchronization.
*   Only IPv4/UDP PTP packets are supported.
*   Only a single PTP domain per network is supported. A PTP domain is a network or a portion of a network within which all the clocks are synchronized.

</ac:rich-text-body></ac:structured-macro>

In the following example, boundary clock 2 receives time from Master 1 (the grandmaster) on a PTP slave port, sets its clock and passes the time down from the PTP master port to boundary clock 1\. Boundary clock 1 receives the time on a PTP slave port, sets its clock and passes the time down the hierarchy through the PTP master ports to the hosts that receive the time.

<div><span style="color: rgb(0,0,0);"><ac:image ac:height="400"><ri:attachment ri:filename="PTPExample.png"></ri:attachment></ac:image>  
</span></div>

### Enable the PTP Boundary Clock on the Switch

To enable the PTP boundary clock on the switch:

1.  Open the `/etc/cumulus/switchd.conf` file in a text editor and add the following line:

    <ac:structured-macro ac:macro-id="a8482676-a9a8-4ae9-aec8-74279b70f51f" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>
2.  Restart `switchd`:

    <ac:structured-macro ac:macro-id="b8beda3d-7c90-49f1-a5a1-f57a16c2bf7e" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### Configure the PTP Boundary Clock

To configure a boundary clock:

1.  Configure the interfaces on the switch that you want to use for PTP. Each interface must be configured as a layer 3 routed interface with an IP address. 

    <ac:structured-macro ac:macro-id="7a6933f3-cfb3-4020-87f7-afd6869f4a0b" ac:name="note" ac:schema-version="1"><ac:rich-text-body>

    PTP _is_ supported on BGP unnumbered interfaces.

    PTP is _not_ supported on switched virtual interfaces (SVIs).

    </ac:rich-text-body></ac:structured-macro><ac:structured-macro ac:macro-id="35af257f-734b-473f-90b2-5d66a08e3729" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>
2.  Configure PTP options on the switch:

    *   Set the `gm-capable` option to `no` to configure the switch to be a boundary clock.

    *   Set the priority, which selects the best master clock. You can set priority 1 or 2\. For each priority, you can use a number between 0 and 255\. The default priority is 255\. For the boundary clock, use a number above 128\. The lower priority is applied first.

    *   Add the `time-stamping` parameter. The switch automatically enables hardware time-stamping to capture timestamps from an Ethernet frame at the physical layer. If you are testing PTP in a virtual environment, hardware time-stamping is not available; however the `time-stamping` parameter is still required.

    *   Add the PTP master and slave interfaces. You do not specify which is a master interface and which is a slave interface; this is determined by the PTP packet received.

    The following commands provide an example configuration:

    <ac:structured-macro ac:macro-id="18ab142e-2751-4414-9313-4449db19cf84" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

    The `ptp4l` man page describes all the configuration parameters.

3.  Restart the `ptp4l` and `phc2sys` daemons:

    <ac:structured-macro ac:macro-id="0ee1909d-59e5-4f9d-95cc-aa342bd14d4e" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

    The configuration is saved in the `/etc/ptp4l.conf` file.

4.  Enable the services to start at boot time:

    <ac:structured-macro ac:macro-id="6a2d17d7-4ee4-47ec-a071-d4fa8654ae5d" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### Example Configuration

In the following example, the boundary clock on the switch receives time from Master 1 (the grandmaster) on PTP slave port swp3s0, sets its clock and passes the time down through PTP master ports swp3s1, swp3s2, and swp3s3 to the hosts that receive the time.

<ac:image ac:height="400"><ri:attachment ri:filename="PTPConfiguration.png"></ri:attachment></ac:image>

<span style="color: rgb(54,66,74);"> </span>

The configuration for the above example is shown below. The example assumes that you have already configured the layer 3 routed interfaces (`swp3s0`, `swp3s1`, `swp3s2`, and `swp3s3`) you want to use for PTP. 

<ac:structured-macro ac:macro-id="4f337d56-11d7-4e8e-b1f9-7d61d29a8d2c" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### Verify PTP Boundary Clock Configuration

To view a summary of the PTP configuration on the switch, run the `net show configuration ptp` command:

<ac:structured-macro ac:macro-id="f75696bb-c6c4-46c0-bfa9-8205aeb22545" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### View PTP Status Information

To view PTP status information, run the `net show ptp parent_data_set` command:

<ac:structured-macro ac:macro-id="45ad229a-74cc-4ec4-ad00-4d1d29839a42" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

To view the additional PTP status information, including the delta in nanoseconds from the master clock, run the `sudo pmc -u -b 0 'GET TIME_STATUS_NP'` command:

<ac:structured-macro ac:macro-id="681fac5a-a4f2-4c94-ac90-34a92829daac" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

### Delete PTP Boundary Clock Configuration

To delete PTP configuration, delete the PTP master and slave interfaces. The following example commands delete the PTP interfaces `swp3s0`, `swp3s1`, and `swp3s2`.

<ac:structured-macro ac:macro-id="01947eee-28a2-49ed-b5af-5bd8ab038635" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

## Use NTP in a DHCP Environment

If you use DHCP and want to specify your NTP servers, you must specify an alternate configuration file for NTP.

Before you create the file, ensure that the DHCP-generated configuration file exists. In Cumulus Linux 3.6.1 and later (which uses NTP 1:4.2.8), the DHCP-generated file is named `/run/ntp.conf.dhcp` while in Cumulus Linux 3.6.0 and earlier (which uses NTP 1:4.2.6) the file is named `/var/lib/ntp/ntp.conf.dhcp`. This file is generated by the `/etc/dhcp/dhclient-exit-hooks.d/ntp` script and is a copy of the default `/etc/ntp.conf` with a modified server list from the DHCP server. If this file does not exist and you plan on using DHCP in the future, you can copy your current `/etc/ntp.conf` file to the location of the DHCP file.

To use an alternate configuration file that persists across upgrades of Cumulus Linux, create a `systemd` unit override file called `/etc/systemd/system/ntp.service.d/config.conf` and add the following content:

<ac:structured-macro ac:macro-id="b56954cd-371c-4496-8b8f-e405eb4f794c" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter> <ac:plain-text-body>~/over sudo mkdir -p /etc/systemd/system/ntp.service.d sudo mv ~/over /etc/systemd/system/ntp.service.d/dhcp.conf sudo chown root:root /etc/systemd/system/ntp.service.d/dhcp.conf]]></ac:plain-text-body></ac:structured-macro>

To validate that your configuration, run these commands:

<ac:structured-macro ac:macro-id="9c57509c-12d7-4645-9269-05461b03a1d3" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

If the state is not _Active_, or the alternate configuration file does not appear in the `ntp` command line — for example:

<ac:structured-macro ac:macro-id="2ff331b8-0b24-4dd1-a62c-5477548a90db" ac:name="code" ac:schema-version="1"><ac:parameter ac:name="language">text</ac:parameter><ac:plain-text-body></ac:plain-text-body></ac:structured-macro>

— then it is likely that a mistake was made. In this case, correct the mistake and rerun the three commands above to verify.

<ac:structured-macro ac:macro-id="c1cd5602-8ab4-4224-b2d3-c757a5653bda" ac:name="note" ac:schema-version="1"><ac:rich-text-body>

With this unit file override present, changing NTP settings using NCLU do not take effect until the DHCP script regenerates the alternate NTP configuration file.

</ac:rich-text-body></ac:structured-macro>

## <span>Related Information</span>

*   *   [Debian System Administrator’s Manual – Time](http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html)
    *   [www.ntp.org](http://www.ntp.org)
    *   [en.wikipedia.org/wiki/Network_Time_Protocol](http://en.wikipedia.org/wiki/Network_Time_Protocol)
    *   [wiki.debian.org/NTP](http://wiki.debian.org/NTP)