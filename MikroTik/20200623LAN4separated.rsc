# jun/23/2020 12:12:45 by RouterOS 6.47
# software id = YG4X-DXxx
#
# model = CRS109-8G-1S-2HnD
# serial number = 786xxxx
/interface bridge
add name=LAN1
add name=LAN2
add name=LAN3
add name=LAN4
add disabled=yes name=wlan
/interface wireless security-profiles
set [ find default=yes ] authentication-types=wpa-psk,wpa2-psk eap-methods="" \
    group-ciphers=tkip mode=dynamic-keys supplicant-identity=MikroTikCRS \
    unicast-ciphers=tkip wpa-pre-shared-key=hujhujhuj wpa2-pre-shared-key=\
    hujhujhuj
add authentication-types=wpa2-psk eap-methods="" management-protection=\
    allowed mode=dynamic-keys name=profile1 supplicant-identity="" \
    wpa2-pre-shared-key=qwertyuiop
/interface wireless
set [ find default-name=wlan1 ] adaptive-noise-immunity=ap-and-client-mode \
    band=2ghz-b/g/n channel-width=20/40mhz-Ce comment=wlandav country=poland \
    disabled=no installation=indoor mode=ap-bridge preamble-mode=long \
    security-profile=profile1 ssid=MikroTikCRS wds-default-bridge=LAN3 \
    wds-mode=dynamic wireless-protocol=802.11
/interface wireless manual-tx-power-table
set wlan1 comment=wlandav
/interface wireless nstreme
set wlan1 comment=wlandav disable-csma=yes enable-polling=no
/ip pool
add comment=LAN1_50-100 name=LAN1 ranges=10.0.0.50-10.0.0.100
add comment=LAN2_50-100 name=LAN2 ranges=10.0.2.50-10.0.2.100
add comment=LAN_wifi_111-130 name=LAN1W ranges=10.0.0.111-10.0.0.130
add comment=LAN_wifi_guest_131-150 name=LAN1WG ranges=10.0.0.131-10.0.0.150
add comment=LAN_openVPN name=LAN1_openVPN ranges=10.0.0.101-10.0.0.110
add name=LAN3 ranges=192.168.1.50-192.168.1.100
add name=LAN4 ranges=10.0.4.50-10.0.4.100
/ip dhcp-server
add add-arp=yes address-pool=LAN1 disabled=no interface=LAN1 lease-time=1h \
    name=DHCP_LAN1
add add-arp=yes address-pool=LAN2 disabled=no interface=LAN2 lease-time=1h \
    name=DHCP_LAN2
add add-arp=yes address-pool=LAN1W interface=wlan name=DHCP-wlan
add add-arp=yes address-pool=LAN3 disabled=no interface=LAN3 lease-time=1h \
    name=DHCP_LAN3
add add-arp=yes address-pool=LAN4 disabled=no interface=LAN4 lease-time=1h \
    name=DHCP_LAN4
/ppp profile
add dns-server=92.242.42.170 local-address=10.0.0.1 name=openvpn \
    remote-address=LAN1_openVPN use-encryption=required
/queue simple
add comment=asus10_0_2_10_guest max-limit=1M/1M name=asus10_0_2_10_guest \
    target=10.0.2.0/24
/system logging action
add name=icinga180 remote=10.0.0.193 target=remote
/user group
set full policy="local,telnet,ssh,ftp,reboot,read,write,policy,test,winbox,pas\
    sword,web,sniff,sensitive,api,romon,dude,tikapp"
/interface bridge port
add bridge=LAN1 interface=ether2
add bridge=LAN1 interface=ether3
add bridge=LAN3 interface=ether4
add bridge=LAN4 interface=ether5
add bridge=LAN2 interface=ether7
add bridge=LAN2 interface=ether8
add bridge=LAN3 interface=wlan1
/interface ovpn-server server
set auth=sha1 certificate=Server cipher=aes256 default-profile=openvpn \
    enabled=yes require-client-certificate=yes
/interface wireless connect-list
add disabled=yes interface=wlan1 security-profile=default
/ip address
add address=10.0.0.1/24 comment=LAN1 interface=LAN1 network=10.0.0.0
add address=10.0.2.1/24 comment=LAN2 interface=LAN2 network=10.0.2.0
add address=92.242.42.170/24 comment=WAN1 interface=ether1 network=\
    92.242.42.0
add address=192.168.8.10/24 comment=WAN2 interface=ether6 network=192.168.8.0
add address=192.168.1.1/24 comment=LAN3 interface=LAN3 network=192.168.1.0
add address=10.0.4.1/24 comment=LAN4 interface=LAN4 network=10.0.4.0
/ip dhcp-server network
add address=10.0.0.0/24 comment=LAN1 dns-server=\
    8.8.8.8,208.67.222.222,213.199.225.14 gateway=10.0.0.1 ntp-server=\
    193.219.28.2,194.29.130.252
add address=10.0.2.0/24 comment=LAN2 dns-server=\
    8.8.8.8,208.67.222.222,213.199.225.14 gateway=10.0.2.1 ntp-server=\
    193.219.28.2,194.29.130.252
add address=10.0.4.0/24 comment=LAN4 dns-server=\
    8.8.8.8,208.67.222.222,213.199.225.14 gateway=10.0.4.1 ntp-server=\
    193.219.28.2,194.29.130.252
add address=192.168.1.0/24 comment=LAN3 dns-server=\
    8.8.8.8,208.67.222.222,213.199.225.14 gateway=192.168.1.1 ntp-server=\
    193.219.28.2,194.29.130.252
/ip dns
set servers=8.8.8.8,208.67.222.222,213.199.225.14
/ip firewall address-list
add address=10.0.0.2-10.0.0.254 list=allowed_to_router
add address=10.0.2.100 list=allowed_to_router
/ip firewall filter
add action=accept chain=input comment="default configuration" \
    connection-state=established,related,untracked
add action=accept chain=input src-address-list=allowed_to_router
add action=accept chain=input protocol=icmp
add action=drop chain=input
add action=accept chain=input comment=openVPN dst-port=1194 log=yes \
    log-prefix=openvpn protocol=tcp
add action=log chain=forward log=yes log-prefix=all-connections protocol=tcp \
    tcp-flags=syn
add action=log chain=forward log=yes log-prefix=all-connections protocol=tcp \
    tcp-flags=fin
add action=drop chain=forward comment="separated address 0od2   0od4 2od4" \
    dst-address=10.0.2.0/24 src-address=10.0.0.0/24
add action=drop chain=forward dst-address=10.0.0.0/24 src-address=10.0.2.0/24
add action=drop chain=forward dst-address=10.0.4.0/24 src-address=10.0.0.0/24
add action=drop chain=forward dst-address=10.0.0.0/24 src-address=10.0.4.0/24
add action=drop chain=forward dst-address=10.0.4.0/24 src-address=10.0.2.0/24
add action=drop chain=forward dst-address=10.0.2.0/24 src-address=\
    192.168.1.0/24
add action=drop chain=forward dst-address=10.0.4.0/24 src-address=\
    192.168.1.0/24
add action=drop chain=forward dst-address=10.0.0.0/24 src-address=\
    192.168.1.0/24
add action=drop chain=forward dst-address=192.168.1.0/24 src-address=\
    10.0.2.0/24
add action=drop chain=forward dst-address=192.168.1.0/24 src-address=\
    10.0.0.0/24
add action=drop chain=forward dst-address=192.168.1.0/24 src-address=\
    10.0.4.0/24
add action=drop chain=forward dst-address=10.0.2.0/24 src-address=10.0.4.0/24
/ip firewall mangle
add action=mark-routing chain=prerouting comment="10_0_0_ to wan1" \
    new-routing-mark=to_WAN1 passthrough=yes src-address=10.0.0.0/24
add action=mark-routing chain=prerouting comment="192_ to_wan1" disabled=yes \
    new-routing-mark=to_WAN1 passthrough=yes src-address=192.168.1.0/24
add action=mark-routing chain=prerouting comment="10_0_2_ to wan2" \
    new-routing-mark=to_WAN2 passthrough=yes src-address=10.0.2.0/24
add action=accept chain=prerouting comment="10_0 na10_2" dst-address=\
    10.0.2.0/24 dst-port=22,5001,3389 log=yes log-prefix="10_0 na10_2" \
    protocol=tcp src-address=10.0.0.0/24
add action=accept chain=prerouting comment="10_2 na 10_0" dst-address=\
    10.0.0.0/24 log=yes log-prefix="10_2 na 10_0" protocol=tcp src-address=\
    10.0.2.0/24 src-port=22,5001,3389
add action=accept chain=prerouting comment=10_0na192_2 dst-address=\
    192.168.2.0/24 dst-port=22,5001,3389 log=yes log-prefix=10_0na192_2 \
    protocol=tcp src-address=10.0.0.0/24
add action=accept chain=prerouting comment=10_0na192_2_icmp dst-address=\
    192.168.2.0/24 log=yes log-prefix=10_0na192_2 protocol=icmp src-address=\
    10.0.0.0/24
add action=accept chain=prerouting comment=192_0na10_2 dst-address=\
    10.0.0.0/24 log=yes log-prefix=192_0na10_2 protocol=tcp src-address=\
    192.168.1.0/24 src-port=22,5001,3389
add action=accept chain=prerouting comment=192_0na10_2_icmp dst-address=\
    10.0.0.0/24 log=yes log-prefix=192_0na10_2 protocol=icmp src-address=\
    192.168.1.0/24
/ip firewall nat
add action=masquerade chain=srcnat comment=WAN1 out-interface=ether1
add action=masquerade chain=srcnat comment=WAN2 out-interface=ether6
add action=dst-nat chain=dstnat comment=win2008 dst-address=92.242.42.170 \
    dst-port=3389 log=yes log-prefix=win2008 protocol=tcp to-addresses=\
    192.168.1.202 to-ports=3389
add action=dst-nat chain=dstnat comment=cam182na7000 dst-address=\
    92.242.42.170 dst-port=7000 log=yes log-prefix=cam182na7000 protocol=tcp \
    to-addresses=192.168.1.182 to-ports=7000
add action=dst-nat chain=dstnat comment=cam192na8000 dst-address=\
    92.242.42.170 dst-port=8000 log=yes log-prefix=cam192na800 protocol=tcp \
    to-addresses=192.168.1.192 to-ports=8000
add action=dst-nat chain=dstnat comment="proxmox226 na 10.0.0.226" \
    dst-address=92.242.42.170 dst-port=18006 log=yes log-prefix=proxmox226 \
    protocol=tcp to-addresses=10.0.0.226 to-ports=8006
add action=dst-nat chain=dstnat comment="proxmox226 na 10.0.0.228" \
    dst-address=92.242.42.170 dst-port=28006 log=yes log-prefix=proxmox228 \
    protocol=tcp to-addresses=10.0.0.228 to-ports=8006
add action=dst-nat chain=dstnat comment="mayneOCR na 192.168.1.196 443" \
    dst-address=92.242.42.170 dst-port=4443 log=yes log-prefix=proxmox228 \
    protocol=tcp to-addresses=192.168.1.196 to-ports=443
add action=dst-nat chain=dstnat comment="proxmox220 na 10.0.0.220" disabled=\
    yes dst-address=92.242.42.170 dst-port=38006 log=yes log-prefix=\
    proxmox220 protocol=tcp to-addresses=10.0.0.220 to-ports=8006
add action=dst-nat chain=dstnat comment="91 na 152dav3389" dst-address=\
    92.242.42.170 dst-port=63389 log=yes log-prefix=152dav3389 protocol=tcp \
    to-addresses=10.0.0.152 to-ports=3389
add action=dst-nat chain=dstnat comment=162openvpn1194 disabled=yes \
    dst-address=92.242.42.170 dst-port=1194 log=yes log-prefix=162openvpn1194 \
    protocol=udp to-addresses=10.0.0.162 to-ports=1194
add action=dst-nat chain=dstnat comment="proxmox226 na 192.168.1.226" \
    disabled=yes dst-address=92.242.42.170 dst-port=8006 log=yes log-prefix=\
    poxmox2 protocol=tcp to-addresses=192.168.1.226 to-ports=8006
/ip firewall service-port
set ftp disabled=yes
set tftp disabled=yes
set irc disabled=yes
set h323 disabled=yes
set sip disabled=yes
set pptp disabled=yes
set udplite disabled=yes
set dccp disabled=yes
set sctp disabled=yes
/ip route
add check-gateway=ping distance=1 gateway=92.242.42.1 routing-mark=to_WAN1
add check-gateway=ping distance=1 gateway=92.242.42.1%ether1 routing-mark=\
    to_WAN1
add check-gateway=ping distance=1 gateway=92.242.42.1 routing-mark=to_WAN2
add check-gateway=ping distance=1 gateway=92.242.42.1%ether6 routing-mark=\
    to_WAN2
add check-gateway=ping distance=2 gateway=92.242.42.1,192.168.8.1
add check-gateway=ping distance=2 gateway=\
    92.242.42.1%ether1,92.242.42.1%ether6
/ip service
set telnet disabled=yes
set ftp disabled=yes
set www address=10.0.2.0/24
set ssh disabled=yes
set api disabled=yes
set winbox address=10.0.0.0/24,10.0.2.0/24
set api-ssl disabled=yes
/ppp secret
add name=client1 password=xxxxxxxxxxxxxxxxxxxxxxxxxx profile=openvpn service=ovpn
add local-address=10.0.0.2 name=client password=xxxxxxxxxxxxxxxxxxxxx remote-address=\
    10.0.0.3 service=ovpn
/system clock
set time-zone-name=Europe/Warsaw
/system identity
set name=MikroTikCRS
/system logging
add action=icinga180 disabled=yes prefix=mikrotik topics=!bridge
add action=icinga180 disabled=yes prefix=mikrotik5 topics=!warning
add action=icinga180 prefix=mikrotik2 topics=error
add action=icinga180 disabled=yes prefix=mikrotik1 topics=!critical
add action=icinga180 disabled=yes prefix=mikrotik3 topics=!firewall
add action=icinga180 disabled=yes prefix=mikrotik6 topics=!wireless
add action=icinga180 disabled=yes prefix=mikrotik4 topics=!info
add action=icinga180 prefix=all-connections topics=firewall
/system ntp client
set enabled=yes primary-ntp=150.254.183.15 secondary-ntp=193.219.28.2
