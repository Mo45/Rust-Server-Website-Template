<template>

<!-- EDIT HERE -->

<div class="container">
<section class="section store text-center" id="store">
<div class="tabs">
  <div class="spoon is-medium is-primary">Store</div>
</div>
<div class="row">
<div class="col-md-5">
<img src="../assets/store.webp" class="img-fluid rounded" alt="Responsive image">
</div>
<div class="col-md-7 store">
<h2>Buy VIP packages</h2>
<h3>And support us!</h3>
<p>Love our servers? You can help us by giving back to support developement. Buy our VIP packages!</p>
<a href="https://somestore.com/" target="_blank" class="btn btn-outline-light btn-lg">Visit Store</a>
</div>
</div>
</section>
</div>

<!-- EDIT HERE -->

</template>


<script>
export default {
  name: 'storeSection',
  props: {
    storeUrl: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
div.store {
	padding-top: 2rem;
}
div.store > h1,div.store > h2,div.store > h3 {
	color: var(--color-highlight);
}
div.store > p {
	color: var(--color-mute);
}
</style>