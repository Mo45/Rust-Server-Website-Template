<template>

<!-- EDIT HERE -->

<div class="container">
<section class="section staff text-center" id="staff">
<div class="tabs">
  <div class="spoon is-medium is-primary">Our Staff</div>
</div>
<div class="row d-flex justify-content-center">

<!-- one member -->
<div class="col-lg-4 col-md-4 col-6">
<img src="../assets/photo.webp" class="lazy rounded-circle staff" alt="Kirill Krasin"/>
<p class="staff-name">Kirill Krasin</p>
<p class="staff-role">Owner</p>
</div>
<!-- one member -->

<!-- one member -->
<div class="col-lg-4 col-md-4 col-6">
<img src="../assets/loader-150.webp" class="lazy rounded-circle staff" alt="John Smith"/>
<p class="staff-name">John Smith</p>
<p class="staff-role">Admin</p>
</div>
<!-- one member -->

<!-- one member -->
<div class="col-lg-4 col-md-4 col-6">
<img src="../assets/loader-150.webp" class="lazy rounded-circle staff" alt="Robert Jones"/>
<p class="staff-name">Robert Jones</p>
<p class="staff-role">Moderator</p>
</div>
<!-- one member -->

</div><!-- row -->
</section>
</div>

<!-- EDIT HERE -->

</template>


<script>
export default {
  name: 'staffSection'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
img.rounded-circle.staff {
    max-width:150px;
    border: 2px solid var(--color-rust);
}
p.staff-name {
    padding-top:1rem;
    font-size:1.2rem;
    color: var(--color-highlight);
}
p.staff-role {
    margin-top:-1rem;
    font-size:.8rem;
    color:var(--color-rust);
}
</style>