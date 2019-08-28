<section class="section social text-center" id="social">
<!-- paid modules -->
<?php include_once('paid/twitter.php');include_once('paid/vk.php');?>
<!-- paid modules, /end -->
<h1>Follow us</h1>
<a href="<?php echo SRV_FACEBOOK; ?>" target="_blank" class="btn btn-outline-light"><i class="fab fa-facebook-f fa-fw"></i></a>
<a href="<?php echo SRV_VK; ?>" target="_blank" class="btn btn-outline-light"><i class="fab fa-vk fa-fw"></i> <?php echo $vk_total;?></a>
<a href="https://twitter.com/<?php echo SRV_TWITTER; ?>" target="_blank" class="btn btn-outline-light"><i class="fab fa-twitter fa-fw"></i> <?php echo $twitter_followers;?></a>
</section>
