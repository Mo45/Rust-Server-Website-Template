<section class="section discord text-center" id="discord">
<div class="tabs">
  <div class="spoon is-medium is-primary">Discord Server</div>
</div>
<div class="row">
<div class="col-md-4 members" id="discord">
<h2 class="discord"><?php echo $discord_name; ?></h2>

<?php if(count($discord_members) >= "100"){echo "100+";}else{echo count($discord_members);}; ?>
<span>USERS ONLINE</span>

</div>
<div class="col-md-8 members" id="online">

<div class="row">
<?php $i = 0; foreach
        ($discord_members as $member)
                {if(++$i > 22) break;
;?>

<div class="col align-self-center">
<img src="<?=SITE_URL;?>img/loader-50.webp" data-src="<?php echo $member['avatar_url'];?>" class="lazy rounded-circle discord-user" title="<?php echo $member['username'];?>" data-bs-toggle="tooltip" data-bs-placement="top" alt="<?php echo $member['username'];?>"/>
</div>
<?php ;};?>

</div><!-- row -->
</div>

</div>
<div class="discord-invite">
<a href="<?php echo DISCORD_INVITE_LINK; ?>" target="_blank" class="btn btn-outline-light btn-lg"><i class="fab fa-discord"></i> Join Us</a>
</div>
</section>
