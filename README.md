[![GitHub license](https://img.shields.io/github/license/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/issues)   [![GitHub stars](https://img.shields.io/github/stars/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/stargazers)   [![GitHub release (latest by date)](https://img.shields.io/github/v/release/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/releases)   [![Twitter Follow](https://img.shields.io/twitter/follow/Mo_45)](https://twitter.com/Mo_45)

# Rust-Server-Website-Template
Website Template for Rust server

**Rust-Server-Website-Template** is a responsive, dynamically updated PHP/CSS template for Rust server website. It is build with Bootstrap 4 and **Rust-Servers.Info** or **Rust-Servers.Net** API.

![Rust-Server-Website-Template](https://i.imgur.com/VdDFKYg.png "Rust-Server-Website-Template Screenshot #1") ![Rust-Server-Website-Template](https://i.imgur.com/vyOqJyc.png "Rust-Server-Website-Template Screenshot #2")

![Rust-Server-Website-Template](https://i.imgur.com/mLVqOFf.png "Discord Feedback Message")

## Demo :tv:

See a demo at https://rust.krasin.space/

## WordPress Theme For Your Rust Servers :metal:

![Rust-Server-Website-Template](https://i.imgur.com/Zp8mtVq.png "RSWT WordPress Theme Screenshot #1")

**RSWT WordPress Theme** [demo](http://rust.krasin.space/wordpress/). Wordpress Theme for your Rust Server Website. Include News, Discord, Steam, Social, Store, Staff, Contact, FAQ and other modules. 
Fully configurable via WordPress [Dashboard Settings Page](https://i.imgur.com/JEcoLm1.png). Theme available for [Patrons](https://www.patreon.com/bePatron?u=8929240) only.

## Extended access for Patreon Patrons :metal:

If you become my Patron and donate $10 or more, you will have an extended access to Template features, private modules, and [additional template styles](https://demo.ruster.site/?v=2) right after release.

You can help me by giving back to support developement. Become my patron on [Patreon](https://www.patreon.com/bePatron?u=8929240).

## Sponsors :dollar:

Many thanks for supporting the project to: **Wesley Seeley** ([The Rust City](http://therustcity.com)), **Roger Karlsen** ([theNords.no](https://theNords.no)).

## Features :thumbsup:

* **Responsive Design**
  * Valid HTML
  * PageSpeed Score Mobile:83% / PC:97% (Since i've add Discord avatar images overall score fall down little bit :sob: )
  * YSlow Score 91%
  * Fully Loaded Time 4.5s 
* **Servers Module** (Rust-Servers.Info API)
  * Server Header Image (Dynamic)
  * Number of players Curr/Max with progress bar (Dynamic)
  * Online/Offline Indicator (Dynamic)
  * Connect and Vote buttons
* **Servers Module V2** (Rust-Servers.Net API)
  * Number of players Curr/Max with progress bar (Dynamic)
  * Online/Offline Indicator (Dynamic)
  * Connect and Vote buttons
* **Discord Server Module** (Discord Data)
  * Server Name (Dynamic)
  * Online Users (Dynamic)
  * Online Users Images (UP to 18 users)
* **Steam Group Module** (Steam Community Data)
  * Total Users (Dynamic)
  * Online Users (Dynamic)
  * In-Game Users (Dynamic)
* **Steam Authentication Module** (By [Ben Smith](https://github.com/SmItH197))
* **Feedback Module**
  * Send message directly to your Discord Channel
* **Full page caching** (Thx to [Jonatan](https://github.com/Jontis00))

## Download :arrow_down:

Please note the main repository is constantly being updated so may contain bugs and other bleeding edge risks. For a stable download please visit the releases page: https://github.com/Mo45/Rust-Server-Website-Template/releases

## Installation :construction_worker:

Upload files to your server.

Open up `config.php`
- change `SITE_URL` to your website url.
- change `SRV_NAME` to your server name.
- change `SRV_SLOGAN` to your server short slogan.
- change `SRV_TWITTER` to your server Twitter username.
- change `CACHE_LIFETIME` cache lifetime in seconds, default value - **300**, set to **0** to disable caching.
- change `STEAM_GID` to your Steam Group ID64 (https://support.multiplay.co.uk/support/solutions/articles/1000202859).
- change `DISCORD_SERVER_ID` to your Discord Server ID (Discord App -> Your Server -> Server Settings -> Widget -> Server ID)
- change `DISCORD_INVITE_LINK` to your Discord Server Invite Link (Discord App -> Your Server -> Server Settings -> Invites -> Create One (Set this link to never expire))
- change `STORE_URL` to your server store url.
- change `SERVER_1_KEY` to your server API Key from https://Rust-Servers.net.
- change `SERVER_1_DESC` to your server short description.

Open up `steamauth/SteamConfig.php`
- change `domainname` to your domain name.
- change `apikey` to your API-Key from http://steamcommunity.com/dev/apikey.

Open up `modules/feedback.php`
- change `$webhookurl` to your Discord Channel webhook. You can also change BOT name and avatar here.
- change `<@REPLACE_WITH_YOUR_DISCORD_USER_ID>` with your UserID like this: `<@75216985209700352>`, you can find it here - https://krasin.space/discord/

## Rust-Servers.INFO or Rust-Servers.NET API? :question:

You can choose your prefered monitoring service, **rust-servers.info** or **rust-servers.net** API. By default (from v**2.0**) this template using [Rust-Servers.Net API](https://rust-servers.net), in order to use it you need to provide API key for each of your servers.

If you want to use **rust-servers.info** API, you need to set `MODULE_SERVERS_V2` to `OFF` and `MODULE_SERVERS` to `ON`.

## Personalize your website :wrench:

- edit `/template/rules.php`
- edit `/template/staff.php`

## Contact module (Email form) :mailbox_with_mail:

Contact module contain only basic HTML form, without any functionality to send email's. If you want to have fully-functional feedback form you need to edit `/modules/contact.php` and add some additional code. Take a look at this [PHP:mail](http://php.net/manual/en/function.mail.php) or use [PHPMailer](https://github.com/PHPMailer/PHPMailer) class.

## How to add more than 2 servers :wrench:

Open `includes.php` and add this code after
```
//EXTRA SERVERS START
```
If you need more than 3 servers you need to change **3** to **4**,**5**,**6** etc.
```
	//GET JSON STATUS FOR SERVER #3
        $json_url = "https://api.rust-servers.info/info/".SRV_ID_3."";
        $json_string = file_get_contents($json_url);
        $parsed_json = json_decode($json_string,true);
		$s3_name        = $parsed_json['hostname'];
                $s3_status      = $parsed_json['online_state'];
                        if($s3_status == "1"){$s3_status = "Online";$s3_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a>";}
			else{$s3_status = "Offline";$s3_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a> ";};
                $s3_cur         = $parsed_json['players_cur'];
                $s3_max         = $parsed_json['players_max'];
                $s3_img         = $parsed_json['image'];
		if ($s3_img == "") {$s3_img = "img/serverlogo.png";};//Empty path fix
		if (getimagesize($s3_img) == false) {$s3_img = "img/serverlogo.png";};
                $s3_ip          = $parsed_json['ip'];
                $s3_port        = $parsed_json['port'];
```
Next, open `config.php` and add this code after

```// Extra servers```

If you need more than 3 servers you need to change **3** to **4**,**5**,**6** etc.
```
//-----------------------------------------------------
// Server #3
//-----------------------------------------------------
	define( "SRV_ID_3","5" );
	# Your server #3 ID (Rust-Servers.Info)
	define( "SRV_3_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
	# Your server #3 description
 ```
 Next, open `/modules/servers.php` and add this code after
 
```<!-- Server #2 END -->```

If you need more than 3 servers you need to change **3** to **4**,**5**,**6** etc.

```
<!-- Server #3 START-->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?php echo $s3_status; ?>">
<img src="<?php echo $s3_img; ?>" class="server-header img-fluid" alt="<?php echo $s3_name; ?>">
</div>
<h2><?php echo $s3_name; ?></h2>
<p><?php echo SRV_3_DESC; ?></p>
<span class="players">Players: <?php echo $s3_cur; ?>/<?php echo $s3_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s3_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s3_max; ?>"></div>
</div>
<a href="steam://connect/<?php echo $s3_ip; ?>:<?php echo $s3_port; ?>" <?php echo $s3_button; ?>
<a target="_blank" href="https://rust-servers.info/login/?login&r=/vote/id-<?php echo SRV_ID_3; ?>.html" class="btn btn-outline-light btn-lg"><i class="fa fa-heart-o" aria-hidden="true"></i> Vote</a>
</div>
</div>
<!-- Server #3 END -->
```
## Copyright :copyright:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
> - MIT License

This is the reason why you're seeing these notices above. So legally, these notices shouldn't be removed from the works/files in which they're found.

If you really need to remove copyright from your project page, become my patron on [Patreon](https://www.patreon.com/bePatron?u=8929240) (**Supporter Level 2 Tier** or higher), and [contact me](https://t.me/Mo_45).
