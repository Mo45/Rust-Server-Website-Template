<section class="section contact text-center" id="contact">
<h1>Contact</h1>
<h3>Need to contact us?</h3>
<p>If you have any questions, we will be happy to help you. Let us know!</p>
<button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#ContactModal"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</button>
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
<form>
  <div class="form-group">
    <label for="mailEmail">Email</label>
    <input type="email" class="form-control" id="mailEmail" aria-describedby="emailHelp" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="mailName">Name</label>
    <input type="text" class="form-control" id="mailName" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="mailSteamid">SteamID</label>
    <input type="text" class="form-control" id="mailSteamID" placeholder="Enter your SteamID, e.g. 76561197997238749">
  </div>
  <div class="form-group">
    <label for="mailText">Enter message</label>
    <textarea class="form-control" id="mailText" rows="3" placeholder="Enter your message"></textarea>
  </div>
<!-- If you don't want to use fancy form, you can provide your contact email -->
<!-- p>mail@example.com</p -->
      </div>
      <div class="modal-footer" id="contact">
  <button type="submit" class="btn btn-outline-light">Send</button>
</form>
       or  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
