<section class="section community text-center" id="community">
<div class="tabs">
  <div class="spoon is-medium is-primary">Steam Community</div>
</div>
<div class="row">
<div class="col-md-4 members" id="total">
<?php echo $memberscount; ?>
<span>MEMBERS</span>
</div>
<div class="col-md-4 members" id="online">
<?php echo $membersonline; ?>
<span>ONLINE</span>
</div>
<div class="col-md-4 members" id="ingame">
<?php echo $membersingame; ?>
<span>IN-GAME</span>
</div>
</div>
<div>
<a href="https://steamcommunity.com/gid/<?php echo STEAM_GID; ?>" target="_blank" class="btn btn-outline-light btn-lg"><i class="fab fa-steam-symbol"></i> Steam Group</a></div>
</section>
