<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="scroll">
<div class="container">
  <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><?php echo SRV_NAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
<?php if(MODULE_SERVERS == "ON" OR MODULE_SERVERS_V2 == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#servers">Servers</a>
      </li>
<?php };?>
<?php if(MODULE_COMMUNITY == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#community">Community</a>
      </li>
<?php };?>
<?php if(MODULE_DISCORD == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#discord">Discord</a>
      </li>
<?php };?>
<?php if(MODULE_STORE == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#store">Store</a>
      </li>
<?php };?>
<?php if(MODULE_PRICING == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#pricing">Pricing</a>
      </li>
<?php };?>
<?php if(MODULE_RULES == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#rules">Rules</a>
      </li>
<?php };?>
<?php if(MODULE_FAQ == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#faq">FAQ</a>
      </li>
<?php };?>
<?php if(MODULE_STAFF == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#staff">Staff</a>
      </li>
<?php };?>
<?php if(MODULE_CONTACT == "ON"){ ;?>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
<?php };?>
    </ul>
  </div>
</div>
</nav>
