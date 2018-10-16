---
title: 'Introducing Cumulus Linux'
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

Cumulus Linux is the first full-featured Linux operating system for the networking industry. The [Debian Jessie](https://www.debian.org/releases/jessie/)-based, networking-focused distribution runs on hardware produced by a [broad partner ecosystem](http://cumulusnetworks.com/hcl/), ensuring unmatched customer choice regarding silicon, optics, cables, and systems.

This user guide provides in-depth documentation on the Cumulus Linux installation process, system configuration and management, network solutions, and monitoring and troubleshooting recommendations. In addition, the quick start guide provides an end-to-end setup process to get you started.

## What's New in Cumulus Linux 3.7

Cumulus Linux 3.7 contains a number of new platforms, features and improvements:

- New [platforms](https://cumulusnetworks.com/hcl) include:
  - QCT QuantaMesh BMS T4048-IX8 (25G Trident 3)
  - QCT QuantaMesh BMS T7032-IX7 (100G Trident 3)
  - Dell S5248F-ON (25G Trident 3)
  - Penguin Arctica 4806xt (10G Trident 2+)
- [Line side loopback](https://docs.cumulusnetworks.com/display/DOCS/Facebook+Voyager+Optical+Interfaces#FacebookVoyagerOpticalInterfaces-lineSideLoopback) and [Terminal loopback](https://docs.cumulusnetworks.com/display/DOCS/Facebook+Voyager+Optical+Interfaces#FacebookVoyagerOpticalInterfaces-terminalLoopback) mode for Facebook Voyager troubleshooting
- [OVSDB Server High Availability (Early Access)](https://docs.cumulusnetworks.com/display/DOCS/OVSDB+Server+High+Availability)
- [RADIUS Change of Authorization (CoA) requests](https://docs.cumulusnetworks.com/display/DOCS/802.1X+Interfaces#id-802.1XInterfaces-CoArequests)
- [RADIUS AAA local fallback authentication](https://docs.cumulusnetworks.com/display/DOCS/RADIUS+AAA#RADIUSAAA-local-fallback-auth)
- [TACACS+ local fallback authentication](https://docs.cumulusnetworks.com/display/DOCS/TACACS+Plus#TACACSPlus-fallback-auth) 
- EVPN enhancements
  - [Neighbor Discovery (ND) Extended Community](https://docs.cumulusnetworks.com/display/DOCS/Ethernet+Virtual+Private+Network+-+EVPN#EthernetVirtualPrivateNetwork-EVPN-ND_extended_community) support
  - [Extended mobility](https://docs.cumulusnetworks.com/display/DOCS/Ethernet+Virtual+Private+Network+-+EVPN#EthernetVirtualPrivateNetwork-EVPN-MAC-mobility) support
  - ECMP support for overlay networks on RIOT-capable Broadcom switches 
- New NCLU commands:
  - [Show the version of a package](https://docs.cumulusnetworks.com/display/DOCS/Adding+and+Updating+Packages#AddingandUpdatingPackages-versionDisplay)
  - [Show the interface description (alias)](https://docs.cumulusnetworks.com/display/DOCS/Interface+Configuration+and+Management#InterfaceConfigurationandManagement-show_alias) for all interfaces on the switch
  - [Show which interfaces are in a VRF](https://docs.cumulusnetworks.com/display/DOCS/Virtual+Routing+and+Forwarding+-+VRF#VirtualRoutingandForwarding-VRF-vrf-interfaces) and the [VNIs for VRF interfaces](https://docs.cumulusnetworks.com/display/DOCS/Virtual+Routing+and+Forwarding+-+VRF#VirtualRoutingandForwarding-VRF-vrf-interfaces)
  - [Change bond mode to IEEE 802.3ad](https://docs.cumulusnetworks.com/display/DOCS/Bonding+-+Link+Aggregation) link aggregation mode

For information on bug fixes and known issues present in this release, refer to the [product release notes](https://support.cumulusnetworks.com/hc/en-us/articles/360007793174-Cumulus-Linux-3-7-Release-Notes).

## Open Source Contributions

To implement various Cumulus Linux features, Cumulus Networks has forked various software projects, like CFEngine, `Netdev` and some Puppet Labs packages. The forked code resides in the Cumulus Networks [GitHub repository](https://github.com/CumulusNetworks).

Cumulus Networks has also developed and released new applications as open source. The list of open source projects is on the [open source software](http://oss.cumulusnetworks.com/) page.

## Hardware Compatibility List

You can find the most up-to-date hardware compatibility list (HCL) [here](http://cumulusnetworks.com/hcl/). Use the HCL to confirm that your switch model is supported by Cumulus Networks. The HCL is updated regularly, listing products by port configuration, manufacturer, and SKU part number.

##  Download the User Guide

You can download the current Cumulus Linux User Guide, as well as previous versions, in PDF format:

- [Cumulus Linux 3.7.0 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.7.0%20User%20Guide.pdf?version=4&modificationDate=1537474618000&api=v2)
- [Cumulus Linux 3.6.2 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.6.2%20User%20Guide.pdf?version=3&modificationDate=1537474847000&api=v2)
- [Cumulus Linux 3.6.1 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.6.1%20User%20Guide.pdf?version=2&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.6.0 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.6.0%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.5.3 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.5.3%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.5.2 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.5.2%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.5.1 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.5.1%20User%20Guide.pdf?version=2&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.4.3 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.4.3%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.3.2 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.3.2%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.2.1 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.2.1%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.1.2 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.1.2%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)
- [Cumulus Linux 3.0.1 User Guide](https://docs.cumulusnetworks.com/download/attachments/8362527/Cumulus%20Linux%203.0.1%20User%20Guide.pdf?version=1&modificationDate=1537401092000&api=v2)