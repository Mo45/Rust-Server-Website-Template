<?php
  include_once("cache.php");
  include_once("includes.php");
?>
<!doctype html>
<html lang="en">
<head>
<title><?php echo SRV_NAME ;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITE_URL;?>/css/style.css">
<link rel='dns-prefetch' href='//use.fontawesome.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//code.jquery.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//stackpath.bootstrapcdn.com' />
<meta name="theme-color" content="#c43235">
<meta name="description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php echo SRV_NAME; ?>">
<meta property="og:url" content="<?php echo SITE_URL; ?>" />
<meta property="og:description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:title" content="<?php echo SRV_NAME; ?>">

<!-- Recomended size for image is 800 x 420 px! -->
<link rel="image_src" href="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/256x256.png">
<meta property="og:image" content="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/256x256.png" />
<meta property="og:image:width" content="256" />
<meta property="og:image:height" content="256" />

<meta name="twitter:image" content="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/256x256.png" />
<meta name="twitter:site" content="@<?php echo SRV_TWITTER; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@Mo_45">

<link rel="icon" href="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/32x32.png">
<link rel="shortcut icon" href="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/32x32.png">
<link rel="apple-touch-icon-precomposed" href="//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/256x256.png">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
<?php if(MODULE_STAFF == "ON"){include_once("modules/staff.php");};?>
<?php if(MODULE_SOCIAL == "ON"){include_once("modules/social.php");};?>
<?php if(MODULE_CONTACT == "ON"){include_once("modules/contact.php");};?>
</div>
<?php include_once("template/footer.php");?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});$('.progress-bar').each(function() {var min = $(this).attr('aria-valuemin');var max = $(this).attr('aria-valuemax');var now = $(this).attr('aria-valuenow');var siz = (now-min)*100/(max-min);$(this).css('width', siz+'%');});</script>
</body>
</html>
