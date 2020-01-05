
# Enphase Envoy Realtime Monitor.

[![GitHub Release][releases-shield]][releases]
[![License][license-shield]](LICENSE)
![Project Maintenance][maintenance-shield]
[![BuyMeCoffee][buymecoffeebadge]][buymecoffee]


This is a simple Docker container to allow you to monitor your Enphase Envoy
solar gateway in realtime via your favourite web browser.
Built using PHP, JS, Bootstrap and packaged using Docker.
Run it on a server or Raspberry Pi.

It uses the built in public API available on your solar gateway at http://enphase.local/production.json

## Instructions:
1. Clone this repo.
2. Build the docker image
```
docker build --file .docker/Dockerfile -t envoy_realtime_monitor .
```

3. Run the container on port 8080 (or whichever port your prefer).
You will need to provide the Envoy Gateway IP address in place of 192.168.1.3

```
docker run -d --add-host envoy.local:192.168.1.3  -p 8080:80 envoy_realtime_monitor
```

4. Browse over to your Docker host (e.g http://192.168.1.60:8080)

![envoymonitor][envoyimg]

The real time monitor shows your current energy consumption and current production.

If you are importing power from the grid your Net consumption will be RED.
If you are exporting power to the grid you Net consumption will be GREEN.

## TODO:

it would be nice if mDNS worked inside the Docker container so it could resolve
the Envoy address automagically.
If someone could provide some guidance that would be appreciated!

## License

This application is licensed under an MIT license, refer to LICENSE for details.

***
[envoy_realtime_monitor]: https://github.com/scottyphillips/envoy_realtime_monitor
[releases-shield]: https://img.shields.io/github/release/scottyphillips/envoy_realtime_monitor.svg?style=for-the-badge
[releases]: https://github.com/scottyphillips/envoy_realtime_monitor/releases
[license-shield]:https://img.shields.io/github/license/scottyphillips/envoy_realtime_monitor?style=for-the-badge
[buymecoffee]: https://www.buymeacoffee.com/RgKWqyt?style=for-the-badge
[buymecoffeebadge]: https://img.shields.io/badge/buy%20me%20a%20coffee-donate-yellow.svg?style=for-the-badge
[maintenance-shield]: https://img.shields.io/badge/Maintainer-Scott%20Phillips-blue?style=for-the-badge
[envoyimg]: envoy_realtime_monitor.jpg
