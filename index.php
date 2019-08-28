<?php
  include_once("cache.php");
  include_once("includes.php");
?>
<!doctype html>
<!--
 * Rust-Server-Website-Template v2.2 (https://github.com/Mo45/Rust-Server-Website-Template/releases)
 * Copyright 2017-2019 Kirill Krasin
 * Licensed under MIT (https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)
-->
<html lang="en">
<head>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<title><?php echo SRV_NAME ;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
<link rel="stylesheet" href="<?=SITE_URL;?>/css/style.css?v=<?php if(DEV_MODE == "ON"){echo rand();}else{echo CSS_VER;};?>">
<meta name="theme-color" content="#c43235">
<meta name="description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?php echo SRV_NAME; ?>">
<meta property="og:url" content="<?php echo SITE_URL; ?>" />
<meta property="og:description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:title" content="<?php echo SRV_NAME; ?>">

<!-- Recomended size for image is 800 x 420 px! -->
<!-- If you want to change favicon or image for social network sharing preview, you need to create at least 2 images with sizes 32x32 and 256x256 pixels -->
<link rel="image_src" href="<?=SITE_URL;?>/img/256x256.png">
<meta property="og:image" content="<?=SITE_URL;?>/img/256x256.png" />
<meta property="og:image:width" content="256" />
<meta property="og:image:height" content="256" />

<meta name="twitter:image" content="<?=SITE_URL;?>/img/256x256.png" />
<meta name="twitter:site" content="@<?php echo SRV_TWITTER; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@Mo_45">

<link rel="icon" href="<?=SITE_URL;?>/img/32x32.png">
<link rel="shortcut icon" href="<?=SITE_URL;?>/img/32x32.png">
<link rel="apple-touch-icon-precomposed" href="<?=SITE_URL;?>/img/256x256.png">

<link href="<?=SITE_URL;?>/css/all.min.css" rel="stylesheet">
<!-- If you want to change main font for your website, you can select one from Google Fonts, and replace Roboto Slab below. Also change font name in css/style.css -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#scroll">
<?php include_once("template/navbar.php");?>
<?php include_once("template/top.php");?>

<div class="container">
<?php if(MODULE_SERVERS == "ON"){include_once("modules/servers.php");};?>
<?php if(MODULE_SERVERS_V2 == "ON"){include_once("modules/servers-v2.php");};?>
<?php if(MODULE_COMMUNITY == "ON"){include_once("modules/community.php");};?>
<?php if(MODULE_DISCORD == "ON"){include_once("modules/discord.php");};?>
<?php if(MODULE_STORE == "ON"){include_once("modules/store.php");};?>
<?php if(MODULE_PRICING == "ON"){include_once("modules/pricing.php");};?>
<?php if(MODULE_RULES == "ON"){include_once("modules/rules.php");};?>
<?php if(MODULE_FAQ == "ON"){include_once("modules/faq.php");};?>
<?php if(MODULE_STAFF == "ON"){include_once("modules/staff.php");};?>
<?php if(MODULE_SOCIAL == "ON"){include_once("modules/social.php");};?>
<?php if(MODULE_CONTACT == "ON"){include_once("modules/contact.php");};?>
</div>
<?php include_once("template/footer.php");?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>
<script>$(function(){$('[data-toggle="tooltip"]').tooltip()});$('.progress-bar').each(function() {var min = $(this).attr('aria-valuemin');var max = $(this).attr('aria-valuemax');var now = $(this).attr('aria-valuenow');var siz = (now-min)*100/(max-min);$(this).css('width', siz+'%');});</script>
</body>
</html>
