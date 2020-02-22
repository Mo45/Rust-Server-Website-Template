<?php if(CONF_BGVID == "ON"){ ?>
<section class="face">
<!-- Specify the path to your video file, because this is video from Facepunch website :) -->
<div class="fullvideo">
        <video preload="auto" autoplay="autoplay" muted="muted" loop="loop" playsinline="">
        	<source type="video/mp4" src="<?php echo SITE_URL; ?>/bg.mp4">
        </video>
</div>
<?php ;}else{ ?>
<section class="face" style="background-image: url( '<?php echo SITE_URL; ?>/img/bg_0.webp' );">
<?php ;};?>
                <div class="face-body">
                        <div class="container text-center">
                        	<!-- If you want to use image instead of text, take a look here >>> https://gist.github.com/Mo45/fee60eabbd598c07b29a5967c7998146 -->
                                <h1 class="face-title one"><?php echo SRV_NAME; ?></h1>
                                <h2 class="face-subtitle"><?php echo SRV_SLOGAN; ?></h2>
                        </div>
                </div>
</section>

