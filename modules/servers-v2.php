<section class="section servers text-center" id="servers">
<h1>Servers Status</h1>
<div class="row">
<!-- Server #1 START -->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?=$s1_status;?>">
<img src="<?php echo $s1_img; ?>" class="server-header img-fluid" alt="<?php echo $s1_name; ?>">
</div>
<h2><?php echo $s1_name; ?></h2>
<p><?php echo SRV_1_DESC; ?></p>
<span class="players">Players: <?php echo $s1_cur; ?>/<?php echo $s1_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s1_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s1_max; ?>"></div>
</div>
<a href="steam://connect/<?php echo $s1_ip; ?>:<?php echo $s1_port; ?>" <?php echo $s1_button; ?>
<a target="_blank" href="<?php echo $s1_url; ?>vote/" class="btn btn-outline-light btn-lg"><i class="fas fa-vote-yea"></i> Vote</a>
</div>
</div>
<!-- Server #1 END -->
<!-- Server #2 START-->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?php echo $s2_status; ?>">
<img src="<?php echo $s2_img; ?>" class="server-header img-fluid" alt="<?php echo $s2_name; ?>">
</div>
<h2><?php echo $s2_name; ?></h2>
<p><?php echo SRV_2_DESC; ?></p>
<span class="players">Players: <?php echo $s2_cur; ?>/<?php echo $s2_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s2_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s2_max; ?>"></div>
</div>
<a href="steam://connect/<?php echo $s2_ip; ?>:<?php echo $s2_port; ?>" <?php echo $s2_button; ?>
<a target="_blank" href="<?php echo $s2_url; ?>vote/" class="btn btn-outline-light btn-lg"><i class="fas fa-vote-yea"></i> Vote</a>
</div>
</div>
<!-- Server #2 END -->
</div>
</section>
