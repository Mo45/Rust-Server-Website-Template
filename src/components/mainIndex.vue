<template>
<section class="face">
<div class="fullvideo">
        <video preload="auto" autoplay="autoplay" muted="muted" loop="loop" playsinline="">
          <source type="video/mp4" src="../assets/bg_v2.mp4">
        </video>
</div>
<div class="face-body">
                        <div class="container text-center">
                                <h1 class="face-title one">{{ rswtTitle }}</h1>
                                <h2 class="face-subtitle">{{ rswtSlogan }}</h2>
                        </div>
                </div>
</section>
  <div class="hello">
    <h1>{{ msg }}</h1>
  </div>
</template>

<script>
export default {
  name: 'mainIndex',
  props: {
    rswtTitle: String,
    rswtSlogan: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
