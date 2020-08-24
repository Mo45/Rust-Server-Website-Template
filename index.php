<?php
  include_once("cache.php");
  include_once("includes.php");
  require ('steamauth/steamauth.php');
?>
<!doctype html>
<!--
 * Rust-Server-Website-Template v2.4 (https://github.com/Mo45/Rust-Server-Website-Template/releases)
 * Copyright 2017-2020 Kirill Krasin
 * Licensed under MIT (https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)
-->
<html lang="en">
<head>
<title><?php echo SRV_NAME ;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel='preconnect' href='//fonts.googleapis.com' />
<link rel='preconnect' href='//cdnjs.cloudflare.com' />
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
<!-- Bootstrap CSS // -->
<meta name="theme-color" content="#c43235">
<meta name="description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?php echo SRV_NAME; ?>">
<meta property="og:url" content="<?php echo SITE_URL; ?>" />
<meta property="og:description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:title" content="<?php echo SRV_NAME; ?>">

<!-- Recomended size for image is 800 x 420 px! -->
<!-- If you want to change favicon or image for social network sharing preview, you need to create at least 2 images with sizes 32x32 and 256x256 pixels -->
<link rel="image_src" href="<?=SITE_URL;?>/img/256x256.webp">
<meta property="og:image" content="<?=SITE_URL;?>/img/256x256.webp" />
<meta property="og:image:width" content="256" />
<meta property="og:image:height" content="256" />

<meta name="twitter:image" content="<?=SITE_URL;?>/img/256x256.webp" />
<meta name="twitter:site" content="@<?php echo SRV_TWITTER; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@Mo_45">

<link rel="icon" href="<?=SITE_URL;?>/img/32x32.webp">
<link rel="shortcut icon" href="<?=SITE_URL;?>/img/32x32.webp">
<link rel="apple-touch-icon-precomposed" href="<?=SITE_URL;?>/img/256x256.webp">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<!-- FontAwesome // -->
<!-- If you want to change main font for your website, you can select one from Google Fonts, and replace Roboto Slab below. Also change font name in css/style.css -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
<!-- Core Stylesheet -->
<link rel="stylesheet" href="<?=SITE_URL;?>/css/style.css?v=<?php if(DEV_MODE == "ON"){echo rand();}else{echo CSS_VER;};?>">
<!-- Core Stylesheet // -->
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
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js" integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous"></script>
<!-- jQuery // -->
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04=" crossorigin="anonymous"></script>
<!-- Bootstrap JS // -->
<!-- LazyLoad JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/12.3.0/lazyload.min.js" integrity="sha256-bojBIKfs4l2WDcJODncBIGEe5fhU7/sM3zRO5/f2nqE=" crossorigin="anonymous"></script>
<!-- LazyLoad JS // -->
<script>$(document).ready(function(){var lazyLoad=new LazyLoad({elements_selector:".lazy",});});</script>
<script>$(function(){$('[data-toggle="tooltip"]').tooltip()});$('.progress-bar').each(function() {var min = $(this).attr('aria-valuemin');var max = $(this).attr('aria-valuemax');var now = $(this).attr('aria-valuenow');var siz = (now-min)*100/(max-min);$(this).css('width', siz+'%');});</script>
</body>
</html>
