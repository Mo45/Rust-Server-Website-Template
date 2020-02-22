<section class="section discord text-center" id="discord">
<h1>Join our Discord Server</h1>
<!-- paid module -->
<?php include_once('paid/discord.php');?>
<!-- paid module, /end -->
<div class="row">
<div class="col-md-4 members" id="discord">
<h2 class="discord"><?php echo $discord_name; ?></h2>

<!-- //Remove lines below if you don't have paid Discord module //START -->
<div class="row">
<div class="col-md-6" id="discord-total">
<?php echo $discord_total;?>
<span class="discord">MEMBERS</span>
</div>
<div class="col-md-6" id="discord-online">
<?php echo count($discord_members); ?>
<span class="discord">USERS ONLINE</span>
</div>
</div>
<!-- //Remove lines abowe if you don't have paid Discord module //END -->

<!-- //Uncomment to use without Paid module//
<?php echo count($discord_members); ?>
<span>USERS ONLINE</span>
//Uncomment to use without Paid module// -->

</div>
<div class="col-md-8 members" id="online">

<div class="row">
<?php $i = 0; foreach
        ($discord_members as $member)
                {if(++$i > 18) break;
;?>

<div class="col align-self-center">
<img src="<?=SITE_URL;?>/img/loader-50.webp" data-src="<?php echo $member['avatar_url'];?>" class="lazy rounded-circle discord-user" title="<?php echo $member['username'];?>" data-toggle="tooltip" data-placement="top" alt="Kirill Krasin"/>
</div>
<?php ;};?>

</div><!-- row -->
</div>

</div>
<div class="discord-invite">
<a href="<?php echo DISCORD_INVITE_LINK; ?>" target="_blank" class="btn btn-outline-light btn-lg"><i class="fab fa-discord"></i> Join Our Discord Server</a>
</div>
</section>
