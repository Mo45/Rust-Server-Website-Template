<template>
<section class="section footer">
<div class="container">
<h6 class="float-start">&copy; {{currentDate.getFullYear()}} &laquo;{{ rswtTitle }}&raquo;</h6>
<span class="float-end small" id="footer">Created by <a href="https://github.com/Mo45">Kirill Krasin</a></span>
</div>
</section>
</template>

<script>
export default {
  name: 'mainFooter',
  data(){
     return {
        currentDate: new Date,
        }
 },
  props: {
    rswtTitle: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
section.footer {
    color: rgba(255, 255, 255, .3);
    padding-top: 2rem;
    padding-bottom: 3rem;
    background-color: #151413;
}
.footer-text {
    opacity: .5;
    color: var(--color-white)!important;
}
section.footer {
    padding-top: 2rem;
    padding-bottom:3rem;
    background-color:var(--color-lt-dark);
}
section.footer > div.container > span > a {
    color: var(--color-highlight);
    text-decoration:underline;
}
section.footer > div.container > span > a:hover {
    text-decoration:none;
}
#footer > a {
  text-decoration: none;
  opacity: .5;
  color: #fff;
  transition: opacity .2s ease;
}
#footer > a:hover {
  text-decoration: none;
  opacity: 1;
  color: #fff;
  transition: opacity .2s ease;
}
</style>