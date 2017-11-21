<section class="section servers text-center" id="servers">
<h1>Servers Status</h1>
<div class="row">
<!-- Server #1 START -->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?=$s1_status;?>">
<img src="<?=$s1_img;?>" class="server-header img-fluid" alt="<?=$s1_name;?>">
</div>
<h2><?=$s1_name;?></h2>
<p><?=SRV_1_DESC;?></p>
<span class="players">Players: <?=$s1_cur;?>/<?=$s1_max;?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$s1_cur;?>" aria-valuemin="0" aria-valuemax="<?=$s1_max;?>"></div>
</div>
<a href="steam://connect/<?=$s1_ip;?>:<?=$s1_port;?>" class="btn btn-outline-success btn-lg<?=$s1_disabled;?>"><i class="fa fa-play-circle" aria-hidden="true"></i> Connect</a>
<a target="_blank" href="https://rust-servers.info/login/?login&r=/vote/id-<?=SRV_ID_1;?>.html" class="btn btn-outline-light btn-lg"><i class="fa fa-heart-o" aria-hidden="true"></i> Vote</a>
</div>
</div>
<!-- Server #1 END -->
<!-- Server #2 START-->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?=$s2_status;?>">
<img src="<?=$s2_img;?>" class="server-header img-fluid" alt="<?=$s2_name;?>">
</div>
<h2><?=$s2_name;?></h2>
<p><?=SRV_2_DESC;?></p>
<span class="players">Players: <?=$s2_cur;?>/<?=$s2_max;?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$s2_cur;?>" aria-valuemin="0" aria-valuemax="<?=$s2_max;?>"></div>
</div>
<a href="steam://connect/<?=$s2_ip;?>:<?=$s2_port;?>" class="btn btn-outline-success btn-lg<?=$s2_disabled;?>"><i class="fa fa-play-circle" aria-hidden="true"></i> Connect</a>
<a target="_blank" href="https://rust-servers.info/login/?login&r=/vote/id-<?=SRV_ID_2;?>.html" class="btn btn-outline-light btn-lg"><i class="fa fa-heart-o" aria-hidden="true"></i> Vote</a>
</div>
</div>
<!-- Server #2 END -->
</div>
</section>
