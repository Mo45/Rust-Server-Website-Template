[![GitHub license](https://img.shields.io/github/license/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/issues)   [![GitHub stars](https://img.shields.io/github/stars/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/stargazers)   [![GitHub release (latest by date)](https://img.shields.io/github/v/release/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/releases)   [![Twitter Follow](https://img.shields.io/twitter/follow/Mo_45)](https://twitter.com/Mo_45)

# Rust-Server-Website-Template
Website Template for Rust server

**Rust-Server-Website-Template** is a responsive, dynamically updated Vue 3 template for Rust server website. It is build with Bootstrap 5 and **Rust-Servers.Net** API.

If you don't have **VPS/VDS** or self-hosted server buy new one at Digital Ocean, you can use [my link](https://m.do.co/c/15b90cac0063) and get a $200, 60-day credit to try it. Regular 1GB/1CPU 25GB SSD will be enough to start with. Select **Docker on Ubuntu 22.04** image at marketplace while creating your droplet.

## Prepare env and clone repo
```
apt update
```
```
git clone --branch rswt-vue https://github.com/Mo45/Rust-Server-Website-Template.git rswt
```
```
apt install npm -y
```
## Project setup
```
npm install
```

### Build docker image:
```
docker build -t rswt-vue .
```

### Run Docker container
```
docker run -p 80:80 rswt-vue
```
This command will run the container with default configuration, mapping port 80 on your host to port 80 in the container. Your rswt.js app should now be accessible at http://your_vps_ip:80. Check it running and all works, then stop the container by pressing ```ctrl+c```.

## Customize your website

To do so edit ```src\rswt.vue``` and follow comments:

```
/* Customize your website by edit below */

        shortTitle: "RSWT", <-- Short title, used for example as page title tag, etc.
        fullTitle: "Mega Awesome Servers",  <-- Main title, used as h1 title, footer copytright, etc. 
        projectSlogan: "Most Amazing Rust Servers",  <-- Subtitle used as h2 title, etc

        discordServerID: "XXXXXXXXXXXXXXXXXX",  <-- Your Discord server ID, used to get server stats

        serverOneApiKey: "YOUR_API_KEY",  <-- Rust-Servers.Net API Key for first server
        serverOneBannerImage: "mosharust.png",  <-- Banner image for first server
        serverOneDescription: "The original experience",  <-- Short description of first server

        serverTwoApiKey: "YOUR_API_KEY_2",  <-- Rust-Servers.Net API Key for second server
        serverTwoBannerImage: "mosharust.png",  <-- Banner image for second server
        serverTwoDescription: "Another cool description",  <-- Short description of second server

        /** If you need more that two servers add them like this:
        * serverThreeApiKey: "YOUR_API_KEY_3",
        * serverThreeBannerImage: "mosharust.png",
        * serverThreeDescription: "Another cool description",
        *
        * serverFourApiKey: "YOUR_API_KEY_4",
        * serverFourBannerImage: "mosharust.png",
        * serverFourDescription: "Another cool description",
        */

        /* Customize your website by edit above */
```