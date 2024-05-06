[![GitHub license](https://img.shields.io/github/license/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/Mo45/Rust-Server-Website-Template.svg)](https://github.com/Mo45/Rust-Server-Website-Template/issues)   [![GitHub stars](https://img.shields.io/github/stars/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/stargazers)   [![GitHub release (latest by date)](https://img.shields.io/github/v/release/Mo45/Rust-Server-Website-Template)](https://github.com/Mo45/Rust-Server-Website-Template/releases)   [![Twitter Follow](https://img.shields.io/twitter/follow/Mo_45)](https://twitter.com/Mo_45)

# Rust-Server-Website-Template
Website Template for Rust server

**Rust-Server-Website-Template** is a responsive, dynamically updated PHP/CSS template for Rust server website. It is build with Bootstrap 5 and **Rust-Servers.Net** API.

![Rust-Server-Website-Template](https://i.imgur.com/gmN55Ub.png "Rust-Server-Website-Template Screenshot #1") ![Rust-Server-Website-Template](https://i.imgur.com/JjdBGIY.png "Rust-Server-Website-Template Screenshot #2")

![Rust-Server-Website-Template](https://i.imgur.com/mLVqOFf.png "Discord Feedback Message")

## Demo :tv:

See a live demo at https://rswt.mosharust.com/

## WordPress Theme For Your Rust Servers :metal:

![Rust-Server-Website-Template](https://i.imgur.com/Zp8mtVq.png "RSWT WordPress Theme Screenshot #1")

**RSWT WordPress Theme** [demo](http://wp.krasin.pro/). Wordpress Theme for your Rust Server Website. Include News, Discord, Steam, Social, Store, Staff, Contact, FAQ and other modules. 
Fully configurable via WordPress [Dashboard Settings Page](https://i.imgur.com/JEcoLm1.png). You can buy it for $20 on [Boosty](https://boosty.to/krasinkirill/posts/e76b767f-f5b4-475c-8dde-0025e1e96f08).

[![DigitalOcean Referral Badge](https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg)](https://www.digitalocean.com/?refcode=15b90cac0063&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge)

## Sponsors :dollar:

Many thanks for supporting the project to: **Wesley Seeley** ([The Rust City](http://therustcity.com)), **Roger Karlsen** ([theNords.no](https://theNords.no)).

## Features :thumbsup:

* **Responsive Design**
  * Valid HTML
  * Mobile-Friendly 
* **Servers Module** (Rust-Servers.Net API)
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
- change `<@REPLACE_WITH_YOUR_DISCORD_USER_ID>` with your UserID like this: `<@75216985209700352>`

## Personalize your website :wrench:

- edit `/template/rules.php`
- edit `/template/staff.php`

## Contact module (Message to your Discord Server) :mailbox_with_mail:

Open `/modules/feedback.php` and add your WebHook url into `$webhookurl` variable. Follow comments for additional parameters for you message composing.

## How to add more than 2 servers :wrench:

Open `includes.php` and add this code after
```
//EXTRA SERVERS START
```
If you need more than 3 servers you need to change all **$s3_somevar** to **$s4_somevar**,**$s5_somevar**,**$s6_somevar** etc.
```
//GET JSON STATUS FOR SERVER #3
  $json_url = "https://rust-servers.net/api/?object=servers&element=detail&key=".SERVER_3_KEY."";
  $json_string = file_get_contents($json_url);
  $parsed_json = json_decode($json_string,true);
  if(empty($parsed_json)){
    $s3_name = "Server Offline";
    $s3_status = "Offline";
    $s3_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
        $s3_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
        $s3_vote_button = "<a target='_blank' href='#' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
        $s3_cur = "0"; $s3_max = "0";
        $s3_img = "img/serverlogo_1024.webp";
    }else{
    $s3_name  = $parsed_json['name'];
    $s3_url   = $parsed_json['url'];
    if($s3_name == "" OR empty($s3_name)){$s3_name = "Server Offline";};
    $s3_status  = $parsed_json['is_online'];
      if($s3_status == "1"){$s3_status = "Online";
      $s3_button = "class='btn btn-outline-success btn-lg'><i class='fa fa-play-circle' aria-hidden='true'></i> Connect</a> ";
      $s3_connect_button = "<button data-bs-toggle='modal' data-bs-target='#ServerConnect3' type='button' class='btn btn-outline-success btn-lg'><i class='fab fa-steam-symbol'></i> Connect</button>";
      $s3_vote_button = "<a target='_blank' href='".$s3_url."vote/' class='btn btn-outline-light btn-lg'><i class='fas fa-vote-yea'></i> Vote</a>";
    }
            else{$s3_status = "Offline";
            $s3_button = "class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Offline</a>&nbsp;";
            $s3_connect_button = "<button type='button' class='btn btn-outline-danger btn-lg disabled'><i class='fa fa-exclamation-circle'></i> Offline</button>";
            $s3_vote_button = "<a target='_blank' href='".$s3_url."vote/' class='btn btn-outline-light btn-lg disabled'><i class='fas fa-vote-yea'></i> Vote</a>";
        };
    $s3_cur   = $parsed_json['players'];
    if($s3_cur == "" OR empty($s3_cur)){$s3_cur = "0";};
    $s3_max   = $parsed_json['maxplayers'];
    if($s3_max == "" OR empty($s3_max)){$s3_max = "0";};
    $s3_img = "img/serverlogo_1024.webp";//Remove PHP Notice in logs
    $s3_ip    = $parsed_json['address'];
    $s3_port  = $parsed_json['port'];
  };
```
Next, open `config.php` and add this code after

```// Extra servers```

If you need more than 3 servers you need to change **SERVER_3_KEY** and **SERVER_3_DESC** to **SERVER_4_KEY** and **SERVER_4_DESC**,and so on - **5**,**6** etc.
```
//-----------------------------------------------------
// Server #3
//-----------------------------------------------------

  define( "SERVER_3_KEY","fkil0HQ6V8Blf3PBBM4rwkEkl2dgG5DwrhN" ); // REQUIRED
  # Your server #3 API Key (Rust-Servers.Net)
  define( "SERVER_3_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
  # Your server #3 description

 ```
 Next, open `/modules/servers.php` and add this code after
 
```<!-- Extra Servers Start -->```

If you need more than 3 servers you need to change **$s3_somevar** to **$s4_somevar**,**$s5_somevar**,**$s6_somevar** etc.

```
<!-- Server #3 START -->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?=$s3_status;?>">
<img src="<?=SITE_URL;?>img/loader.webp" data-src="<?=SITE_URL;?><?php echo $s3_img; ?>" class="lazy server-header img-fluid" alt="<?php echo $s3_name; ?>">
</div>
<h2><?php echo $s3_name; ?></h2>
<p><?php echo SERVER_3_DESC; ?></p>
<span class="players">Players: <?php echo $s3_cur; ?>/<?php echo $s3_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s3_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s3_max; ?>"></div>
</div>
<?php echo $s3_connect_button; ?>&nbsp;<?php echo $s3_vote_button; ?>
</div>
</div>
<!-- Server #3 END -->
```
After ```<!-- Server #2 Connect Modal END -->``` and add connect modal code:

If you need more than 3 servers you need to change **$s3_somevar** to **$s4_somevar**,**$s5_somevar**,**$s6_somevar** etc.

```
<!-- Server #3 Connect Modal Start -->
<div class="modal fade" id="ServerConnect3" tabindex="-1" role="dialog" aria-labelledby="ServerConnectmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="ServerConnect">
      <div class="modal-header" id="ServerConnect">
        <h5 class="modal-title" id="exampleModalLabel">Connect to Server</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $s3_name; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
  <p class="text-center"><a href="steam://connect/<?php echo $s3_ip; ?>:<?php echo $s3_port; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
  <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
  <hr>
  <div class="form-group">
    <label for="consolecommand-3">Connect via Rust in-game console</label>
    <textarea class="form-control" id="consolecommand-3" rows="1">client.connect <?php echo $s3_ip; ?>:<?php echo $s3_port; ?></textarea>
  </div>
  <p>In order to connect via in-game console, while you in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
      </div>
      <div class="modal-footer" id="contact"><button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Server #3 Connect Modal END -->
```

## Copyright :copyright:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
> - MIT License

This is the reason why you're seeing these notices above. So legally, these notices shouldn't be removed from the works/files in which they're found.

If you really need to remove copyright from your project page, Send me at least a tip [Boosty](https://boosty.to/krasinkirill/donate).
