<template>

<div class="col-lg-6 col-md-12 col-12 srv">
<div class="one-server">
<div v-if="serverData.is_online === '0'" class="offline">
<img src="../assets/no-banner-min.png" class="server-header img-fluid offline" v-bind:alt="serverData.hostname">
</div>
<div v-if="serverData.is_online === '1'" class="online">
<img :src="bannerUrl" rel="preload" class="server-header img-fluid online" v-bind:alt="serverData.hostname">
</div>
<h2>{{ serverData.hostname }}</h2>
<p>{{ this.serverDescription }}</p>
<span class="players">Players: {{ serverData.players }}/{{ serverData.maxplayers }}</span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ serverData.players }}" aria-valuemin="0" aria-valuemax="{{ serverData.maxplayers }}"></div>
</div>
<button v-if="serverData.is_online === '1'" data-bs-toggle="modal" v-bind:data-bs-target="'#' + this.dataID" type="button" class="btn btn-outline-success btn-lg">Connect</button>&nbsp;
<button v-else type="button" class="btn btn-outline-danger disabled btn-lg">Offline</button>&nbsp;
<a target="_blank" v-bind:href="serverData.url + 'vote'" class="btn btn-outline-light btn-lg">Vote</a>

</div>
</div>

<!-- Modal -->
<div class="modal fade" v-bind:id="this.dataID" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connect to Server</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong>{{ serverData.hostname }}</strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
  <p class="text-center"><a :href="'steam://connect/' + serverData.address + ':' + serverData.port" role="button" class="btn btn-success"> Connect via Steam</a></p>
  <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
  <hr>
  <div class="form-group">
    <label v-bind:for="this.dataID + '-connect'" class="consoleCommand">Connect via Rust in-game console</label>
    <textarea class="form-control" v-bind:id="this.dataID + '-connect'" rows="1" type="text" :value="'client.connect ' + serverData.address + ':' + serverData.port"></textarea>
  </div>
  <p>In order to connect via in-game console, while you in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
      </div>
      <div class="modal-footer" id="contact"><button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal END -->

</template>


<script>
import axios from 'axios'
export default {
  name: 'getServer',
  data() {
    return {
      serverData: []
    }
  },
  props: {
    apiKey: String,
    bannerImage: String,
    serverDescription: String,
    dataID: String
  },
  computed: {
    bannerUrl: function() {
      return require(`../assets/${this.bannerImage}`);
    }
  },
  mounted() {
    axios
      .get('https://rust-servers.net/api/?object=servers&element=detail&key=' + this.apiKey)
      .then((response) => {
        this.serverData = response.data
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.srv {
    margin-bottom: 20px;
}
div.online {
    border-bottom: 3px solid #738D45;
}
div.offline {
    border-bottom: 3px solid var(--color-rust);
}
div.offline > img.server-header {
    opacity: .3;
}
img.server-header {
    outline: 1px solid rgba(48,0,50,.1);
    transform: scale(1);
    transition: transform .2s ease;
}
img.server-header:hover{
    transform: scale(1.1);
}
div.one-server > h2 {
    margin-top: 1em;
    font-size: 1.2rem;
    padding-bottom: 1em;
    border-bottom: 1px solid rgba(230, 230, 232, .1);
}
div.one-server > h2, div.one-server > p, div.one-server > span, h5.modal-title, div.modal-body > p {
    color: var(--color-highlight);
}
.consoleCommand {
    color: var(--color-highlight);
}
.form-control {
    margin-top: 20px;
    margin-bottom: 20px;
}
div.one-server > p {
    border-bottom: 1px solid rgba(230, 230, 232, .1);
    padding-bottom: 10px;
    color: var(--color-mute);
}
.servers {
    background-color: transparent;
    position: relative;
    z-index: 100;
}
.description {
    padding: 20px;
    background-color: var(--color-mid-dark);
}
.description-text > h2 {
    font-size: 1.1rem;
    color: var(--color-mute);
}
.description-text > h3 {
    font-size: .9rem;
    color: var(--color-mute);
}
.server-status {
    margin-left: 10px;
}
.online{
    color: var(--color-online);
}
.offline{
    color: var(--color-offline);
}
.progress {
    margin-top: 15px;
    margin-bottom: 20px;
}
.modal-content {
    background: radial-gradient(circle at top left, rgba(74, 81, 92, 0.4) 0%, rgba(75, 81, 92, 0) 60%), #25282e;
    border-radius: 0;
    border-top: 1px solid;
    border-image-slice: 1;
    border-image: linear-gradient(to left, #8f2527 1%, var(--color-rust) 50%, var(--color-rust) 100%) 100% 0 100% 0 / 2px 0 2px 0 stretch;
}
.modal-footer#contact {
    border-top: 1px solid rgba(230, 230, 232, .1);
}
@keyframes pulse{50%{opacity:.5}}.animate-pulse {animation:pulse 2s cubic-bezier(.4,0,.6,1) infinite}@keyframes spin{to{transform:rotate(1turn)}}.animate-spin {animation:spin 1s linear infinite}@keyframes lightbox-hover{0%{outline-offset:0;outline:solid 5px rgba(255,255,255,.5);}80%{outline-offset:10px;outline:solid 0 rgba(255,255,255,.1);}}
img#desc-icon{
    transform: scale(1);
    transition: transform .2s ease;
}
</style>