[![GitHub license](https://img.shields.io/github/license/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/issues)   [![GitHub stars](https://img.shields.io/github/stars/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/stargazers)   [![Twitter Follow](https://img.shields.io/twitter/follow/Mo_45)](https://twitter.com/Mo_45)

# Rust-Server-Website-Template

**Rust-Server-Website-Template** is a responsive, dynamically updated Vue 3 template for Rust server website. It is build with Bootstrap 5 and **Rust-Servers.Net** API.

If you don't have **VPS/VDS** or self-hosted server buy new one at Digital Ocean, you can use [my link](https://m.do.co/c/15b90cac0063) and get a $200, 60-day credit to try it. Regular 1GB/1CPU 25GB SSD will be enough to start with. Select **Docker on Ubuntu 22.04** image at marketplace while creating your droplet.

[![Rust-Server-Website-Template](https://i.imgur.com/sBn5mJH.png "Rust-Server-Website-Template Vue Screenshot")](https://i.imgur.com/sBn5mJH.png)

## Как развернуть на Рег.ру или timeweb.cloud

Для того, чтобы запустить (развернуть) RSWT будет достаточно самого простого VPS с предустановленным Docker. Где и какой именно выбрать, а так-же пошаговая инструкция [вот тут](https://teletype.in/@kirillkrasin/deploy-rswt-vue-docker).

## Demo

See a live demo at https://dev.mosharust.com/

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
cd rswt
```
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

To do so edit ```src\config.json``` and follow comments:

```
{
  "TITLE_SHORT": "RSWT Vue App", <-- Short title, used for example as page title tag, etc.
  "TITLE_FULL": "Mega Awesome Servers", <-- Main title, used as h1 title, footer copytright, etc. 
  "PRJ_SLOGAN": "Most Amazing Rust Servers", <-- Subtitle used as h2 title, etc
  "DISCORD_ID": "XXXXXXXXXXXXXXXXXX", <-- Your Discord server ID, used to get server stats

  "S1_API_KEY": "YOUR_API_KEY", <-- Rust-Servers.Net API Key for first server
  "S1_BANNER": "mosharust.png", <-- Banner image for first server
  "S1_DESC": "The original experience", <-- Short description of first server

  "S2_API_KEY": "YOUR_API_KEY", <-- Rust-Servers.Net API Key for second server
  "S2_BANNER": "mosharust.png", <-- Banner image for second server
  "S2_DESC": "Another cool description", <-- Short description of second server

  "S3_API_KEY": "YOUR_API_KEY",
  "S3_BANNER": "mosharust.png",
  "S3_DESC": "Another cool description",

  "S4_API_KEY": "YOUR_API_KEY",
  "S4_BANNER": "mosharust.png",
  "S4_DESC": "Another cool description"
}
```

Don't forget to edit another components, like **FAQ**, **Staff**, **Rules** etc. To do so edit ```components\faqSection.vue```, ```components\rulesSection.vue```, ```components\staffSection.vue```, ```components\storeSection.vue``` by following comments. It's self explanatory basic HTML.

### Run Docker container after your changes
```
docker compose up -d --build
```
This command will force build and run the container in detached mode, mapping port 80 on your host to port 80 in the container. Your rswt.js app should now be accessible at http://your_vps_ip:80.

If you need to bind app to another port (not **80**) edit **.env** file in rswt folder:

```
#!/usr/bin/env bash

APP_NAME=rswt-vue
APP_PORT=80 <-- Change to desired port
APP_VER=0.0.2
```

## Copyright :copyright:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
> - MIT License

This is the reason why you're seeing these notices above. So legally, these notices shouldn't be removed from the works/files in which they're found.

If you really need to remove copyright from your project page, Send me at least a tip [Boosty](https://boosty.to/krasinkirill/donate).