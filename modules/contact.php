<section class="section contact text-center" id="contact">
<h1>Contact</h1>
<h3>Need to contact us?</h3>
<p>If you have any questions, we will be happy to help you. Let us know!</p>

<?php if(isset($_SESSION['steamid'])) { ;?>
<button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#ContactModal"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</button>
<?php ;}else{ ;?>
<a href="<?php echo SITE_URL;?>?login" role="button" class="btn btn-outline-light btn-lg"><i class="fab fa-steam"></i> Log-In</a>
<?php ;};?>
</section>

<div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="contactmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="contact">
      <div class="modal-header" id="contact">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post">
  <div class="form-group">
    <label for="mailEmail">Email</label>
    <input type="email" class="form-control" name="mailEmail" id="mailEmail" aria-describedby="emailHelp" placeholder="Enter your email" required>
  </div>
  <div class="form-group">

<?php if(isset($_SESSION['steamid'])) { include_once('steamauth/userInfo.php');?>

<label for="mailName">Name</label>
<input type="text" class="form-control is-valid" name="mailName" id="mailName" value="<?=$steamprofile['personaname'];?>">

<?php ;}else{ ;?>

<label for="mailName">Name</label>
<input type="text" class="form-control" name="mailName" id="mailName" placeholder="Enter your name" required>

<?php ;};?>

  </div>
  <div class="form-group">

<?php if(isset($_SESSION['steamid'])) { include_once('steamauth/userInfo.php');?>

<label for="mailSteamid">SteamID</label>
<input type="text" class="form-control is-valid" name="mailSteamID" id="mailSteamID" value="<?=$steamprofile['steamid'];?>">

<?php ;}else{ ;?>

<label for="mailSteamid">SteamID</label>
<input type="text" class="form-control" name="mailSteamID" id="mailSteamID" placeholder="7656XXXXXXXXXXXXX" required>

<?php ;};?>
  </div>
  <div class="form-group">
    <label for="mailText">Enter message</label>
    <textarea class="form-control" name="mailText" id="mailText" rows="3" placeholder="Enter your message" required></textarea>
  </div>
<!-- If you don't want to use fancy form, you can provide your contact email -->
<!-- p>mail@example.com</p -->
      </div>
      <div class="modal-footer" id="contact">
  <button type="submit" name="sendDisc" class="btn btn-outline-light">Send</button>

</form>
       or  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php if(isset($_POST['sendDisc']) && !empty($_POST['mailText'])){

  $steamava = $steamprofile['avatarfull'];
  $steamurl = $steamprofile['profileurl'];
  $steamname = $steamprofile['personaname'];
  $steamid = $steamprofile['steamid'];
  $message = $_POST['mailText'];
  $usermail = $_POST['mailEmail'];
  include_once('modules/feedback.php'); $discordFunc = new discordFunc();

  $discordFunc->sendMSG($message,$steamname,$usermail,$steamid,$steamurl,$steamava);

};?>