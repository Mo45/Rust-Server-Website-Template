<template>

<!-- EDIT HERE -->

<div class="container">
<section class="section rules text-center" id="faq">
<div class="tabs">
  <div class="spoon is-medium is-primary">FAQ</div>
</div>
<!-- SINGLE QUESTION & ANSWER -->
<h3 class="faq-question">Question #1</h3>
<p class="text-start">Lorem ipsum dolor sit amet, consectetur <a href="#">adipiscing elit</a>. Maecenas euismod orci a dapibus laoreet. Aliquam a viverra turpis. Sed consectetur elit ut porttitor egestas. Morbi sem velit, dictum posuere ligula id, gravida tincidunt purus. In bibendum elementum lacus vitae congue. Suspendisse tempor ac enim vitae blandit. Vivamus eu neque elementum, luctus velit in, vulputate felis. Fusce ac molestie nulla, et dictum enim. Proin posuere leo quis pellentesque interdum. Nulla laoreet euismod dapibus. Sed suscipit, metus at auctor rhoncus, lacus ex sagittis libero, nec ullamcorper tortor neque ut elit.</p>
<!-- SINGLE QUESTION & ANSWER /END -->
<!-- SINGLE QUESTION & ANSWER -->
<h3 class="faq-question">Question #2</h3>
<p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod orci a dapibus laoreet. Aliquam a viverra turpis. Sed consectetur elit ut porttitor egestas. Morbi sem velit, dictum posuere ligula id, gravida tincidunt purus. In bibendum elementum lacus vitae congue. Suspendisse tempor ac enim vitae blandit. Vivamus eu neque elementum, luctus velit in, vulputate felis. Fusce ac molestie nulla, et dictum enim. Proin posuere leo quis pellentesque interdum. Nulla laoreet euismod dapibus. Sed suscipit, metus at auctor rhoncus, lacus ex sagittis libero, nec ullamcorper tortor neque ut elit.</p>
<!-- SINGLE QUESTION & ANSWER /END -->
<!-- SINGLE QUESTION & ANSWER -->
<h3 class="faq-question">Question #3</h3>
<p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod orci a dapibus laoreet. Aliquam a viverra turpis. Sed consectetur elit ut porttitor egestas. Morbi sem velit, dictum posuere ligula id, gravida tincidunt purus. In bibendum elementum lacus vitae congue. Suspendisse tempor ac enim vitae blandit. Vivamus eu neque elementum, luctus velit in, vulputate felis. Fusce ac molestie nulla, et dictum enim. Proin posuere leo quis pellentesque interdum. Nulla laoreet euismod dapibus. Sed suscipit, metus at auctor rhoncus, lacus ex sagittis libero, nec ullamcorper tortor neque ut elit.</p>
<!-- SINGLE QUESTION & ANSWER /END -->
</section>
</div>

<!-- EDIT HERE -->

</template>


<script>
export default {
  name: 'faqSection'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3.faq-question {
	text-align: left;
  border-bottom: 1px solid var(--color-rust);
  padding-bottom: 5px;
  margin-bottom: 10px;
}
p.text-start {
	color: var(--color-mute);
}
p.text-start > a {
	color: var(--color-mute);
	text-decoration: underline;
}
p.text-start > a:hover {
	color: var(--color-white);
	text-decoration: none;
}
</style>