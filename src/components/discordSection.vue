<template>
<div class="container">

<section class="section discord text-center" id="discord">
<div class="tabs">
  <div class="spoon is-medium is-primary">Discord Server</div>
</div>
<div class="row">
<div class="col-md-4 members" id="discord">
<h2 class="discord">{{ discordData.name }}</h2>

<p v-if="getMembersCount = 100">100+</p>
<p v-else-if="discordData.members.length < 100">{{ discordData.members.length }}</p>
<span>USERS ONLINE</span>

</div>

<div class="col-md-8 members" id="online">

<div class="row">
<div v-for="item in slicedMembers" :key="item.id" class="col align-self-center mb-3">
<img :src="item.avatar_url" class="rounded-circle discord-user" :title="item.username" :alt="item.username"/>
</div>
</div>

</div><!-- row -->

</div>
<div class="discord-invite">
<a href="#" target="_blank" class="btn btn-outline-light btn-lg">Join Us</a>
</div>
</section>

</div>
</template>


<script>
import axios from 'axios'
export default {
  name: 'discordSection',
  data() {
    return {
      discordData: []
    }
  },
  props: {
    discordID: String
  },
  computed: {
    getMembersCount() {
        return this.discordData.members.length ? this.discordData.members.length : 0;
    },
    slicedMembers() {
        return this.discordData.members ? this.discordData.members.slice(-22) : [];
    }
  },
  mounted() {
    axios
      .get('https://discordapp.com/api/guilds/' + this.discordID + '/widget.json')
      .then((response) => {
        this.discordData = response.data
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
span.discord {
    font-size:1rem;
    display: block;
}
#discord-total {
    color: #fff;
}
div.members#online {
    color: var(--color-lt-blue);
}
div.members#ingame {
    color: var(--color-lt-green);
}
div.members#discord {
    color: var(--color-lt-green);
    padding-top:10px;
}
section.community > div.row {
    margin-bottom: 3rem;
}
div.discord-invite {
    margin-top: 3rem;
    border-bottom: 1px solid rgba(230,230,232,.1);
    padding-bottom: 3rem;
}
img.rounded-circle.discord-user {
    max-width:50px;
    border: 2px solid var(--color-rust);
}
h2.discord {
    color:#7289DA;
    font-size: 1.2rem;
}
</style>