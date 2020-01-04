
# Enphase Envoy Realtime Monitor.

[![GitHub Release][releases-shield]][releases]
[![License][license-shield]](LICENSE)
![Project Maintenance][maintenance-shield]
[![BuyMeCoffee][buymecoffeebadge]][buymecoffee]


This is a simple Docker container to allow you to monitor your Enphase Envoy
solar gateway in Real time.

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

## TODO:

it would be nice if mDNS worked inside the Docker container so it could resolve
the Envoy address automagically. 

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
