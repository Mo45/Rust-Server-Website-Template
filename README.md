[![GitHub license](https://img.shields.io/github/license/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/issues)

# Rust-Server-Website-Template
Website Template for Rust server

**Rust-Server-Website-Template** is a responsive, dynamically updated PHP/CSS template for Rust server website. It is build with Bootstrap 4 and Rust-Servers.Info API.

## Demo

See a demo at https://me.gametranslation.net/rust

## Donate

You can help us by giving back to support developement. Become my patron on [Patreon](https://www.patreon.com/rustserversinfo).

## Features

* **Responsive Design**
  * Valid HTML
  * PageSpeed Score 96%
  * YSlow Score 93%
  * Less than 1MB
* **Servers Module** (Rust-Servers.Info API)
  * Server Header Image (Dynamic)
  * Number of players Curr/Max with progress bar (Dynamic)
  * Online/Offline Indicator (Dynamic)
  * Connect and Vote buttons
* **Steam Group Module** (Steam Community Data)
  * Total Users (Dynamic)
  * Online Users (Dynamic)
  * In-Game Users (Dynamic)
* **Full page caching** (Thx to [Jonatan](https://github.com/Jontis00))

## Download

Please note the main repository is constantly being updated so may contain bugs and other bleeding edge risks. For a stable download please visit the releases page: https://github.com/Mo45/Rust-Server-Website-Template/releases

## Installation

Upload files to your server.

Open up `config.php`
- change `SITE_URL` to your website url.
- change `SRV_NAME` to your server name.
- change `SRV_SLOGAN` to your server short slogan.
- change `SRV_TWITTER` to your server Twitter username.
- change `CACHE_LIFETIME` cache lifetime in seconds, default value - **300**, set to **0** to disable caching.
- change `STEAM_GID` to your Steam Group ID64 (https://support.multiplay.co.uk/support/solutions/articles/1000202859).
- change `STORE_URL` to your server store url.
- change `SRV_ID_1` to your server ID on https://Rust-Servers.Info.
- change `SRV_1_DESC` to your server short description.

## Personalize your website

- edit `/template/rules.php`
- edit `/template/staff.php`

## Contact module (Email form)

Contact module contain only basic HTML form, without any functionality to send email's. If you want to have fully-functional feedback form you need to edit `/modules/contact.php` and add some additional code. Take a look at this [PHP:mail](http://php.net/manual/en/function.mail.php) or use [PHPMailer](https://github.com/PHPMailer/PHPMailer) class.


## How to add more than 2 servers

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
## Copyright

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
> - MIT License

This is the reason why you're seeing these notices above. So legally, these notices shouldn't be removed from the works/files in which they're found.
