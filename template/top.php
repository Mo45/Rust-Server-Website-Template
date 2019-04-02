<?php if(CONF_BGVID == "ON"){ ?>
<section class="face">
<!-- Specify the path to your video file, because this is video from Facepunch website :) -->
<div class="fullvideo">
        <video loop="" muted="" autoplay="" playsinline="">
                <source src="bg.mp4" type="video/mp4">
        </video>
</div>
<?php ;}else{ ?>
<section class="face" style="background-image: url( '//abjwokxjen.cloudimg.io/cdn/n/n/demo.ruster.site/img/bg_0.jpg' );">
<?php ;};?>
                <div class="face-body">
                        <div class="container text-center">
                                <h1 class="face-title one"><?php echo SRV_NAME; ?></h1>
                                <h2 class="face-subtitle"><?php echo SRV_SLOGAN; ?></h2>
                        </div>
                </div>
</section>

