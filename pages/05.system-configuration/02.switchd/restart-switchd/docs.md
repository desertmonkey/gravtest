---
title: 'Restart switchd'
date: '22:15 10-10-2018'
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

## Restart switchd

Whenever you modify any `switchd` hardware configuration file (typically changing any `*.conf` file that requires making a change to the switching hardware, like `/etc/cumulus/datapath/traffic.conf`), you must restart `switchd` for the change to take effect:

```
cumulus@switch:~$ sudo systemctl restart switchd.service
```

! You do not have to restart the `switchd` service when you update a network interface configuration (that is, edit `/etc/network/interfaces`).

!! Restarting `switchd` causes all network ports to reset in addition to resetting the switch hardware configuration.