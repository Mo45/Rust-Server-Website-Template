<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="scroll">
<div class="container">
  <a class="navbar-brand" href="#">
  <img src="../assets/rust-marque.svg" v-bind:alt="altText" id="rust-marque" width="48" height="48"/>
  </a>
  <div class="navbar navbar-end" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#servers">Servers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#discord">Discord</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#store">Store</a>
      </li>
    </ul>
  </div>
</div>
</nav>
</template>

<script>
export default {
  name: 'NavBar',
  props: {
    altText: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)* .5);
    padding-left: calc(var(--bs-gutter-x)* .5);
    margin-right: auto;
    margin-left: auto;
}
.navbar-end {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin-left: auto;
}
nav.navbar.bg-dark {
    padding: 1rem;
    color: #fff;
    background-color:rgba(23,23,23,0)!important;
}
.navbar-nav {
    --bs-nav-link-padding-x: 0.5rem;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-color: rgba(255,255,255,.5);
    --bs-nav-link-hover-color: rgba(255,255,255,1);
    display: flex;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
img#rust-marque{
    max-height: 48px;
    transform: scale(1);
    transition: transform .2s ease;
}
img#rust-marque:hover{
    transform: scale(1.1);
}
a.nav-link {
    border-bottom: 3px solid rgba(255,255,255,.05);
}
a.nav-link:hover {
    color: #fff;
    border-bottom: 3px solid var(--color-rust);
}
</style>