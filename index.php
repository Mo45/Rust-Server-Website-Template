<?php include_once("includes.php");?>
<!doctype html>
<html lang="en">
<head>
<title><?=SRV_NAME;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css?<?php echo rand();?>">
</head>
<body>
<?php include_once("template/navbar.php");?>
<?php include_once("template/top.php");?>
<div class="container">
<?php if(MODULE_SERVERS == "ON"){include_once("modules/servers.php");};?>
<?php if(MODULE_COMMUNITY == "ON"){include_once("modules/community.php");};?>
<?php if(MODULE_STORE == "ON"){include_once("modules/store.php");};?>
<?php if(MODULE_RULES == "ON"){include_once("modules/rules.php");};?>
</div>
<?php include_once("template/footer.php");?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
$('.progress-bar').each(function() {
  var min = $(this).attr('aria-valuemin');
  var max = $(this).attr('aria-valuemax');
  var now = $(this).attr('aria-valuenow');
  var siz = (now-min)*100/(max-min);
  $(this).css('width', siz+'%');
});
</script>
</body>
</html>
