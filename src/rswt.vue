<template>
  <NavBar :altText="this.shortTitle"/>
  <mainIndex :rswtTitle="this.fullTitle" :rswtSlogan="this.projectSlogan"/>

  <div class="container">
  <section class="section servers text-center" id="servers">
   <div class="tabs"><div class="spoon is-medium is-primary">Servers Status</div></div>
    <div class="row justify-content-center">

     <getServer_one dataID="first" :apiKey="this.serverOneApiKey" :bannerImage="this.serverOneBannerImage" :serverDescription="this.serverOneDescription"/>
     <getServer_two dataID="second" :apiKey="this.serverTwoApiKey" :bannerImage="this.serverTwoBannerImage" :serverDescription="this.serverTwoDescription"/>

     <!-- If you need more that two servers add them like this: -->
     <!-- getServer_three dataID="third" :apiKey="this.serverThreeApiKey" :bannerImage="this.serverThreeBannerImage" :serverDescription="this.serverThreeDescription"/ -->
     <!-- getServer_four dataID="fourth" :apiKey="this.serverFourApiKey" :bannerImage="this.serverFourBannerImage" :serverDescription="this.serverFourDescription"/ -->

    </div>
  </section>
  </div>
  <discordSection :discordID="this.discordServerID"/>
  <storeSection/>
  <rulesSection/>
  <faqSection/>
  <staffSection/>
  <mainFooter :rswtTitle="this.fullTitle"/>
</template>

<script>
import Config from "./config.json";

import NavBar from './components/NavBar.vue'
import mainIndex from './components/mainIndex.vue'
import mainFooter from './components/mainFooter.vue'
import storeSection from './components/storeSection.vue'
import rulesSection from './components/rulesSection.vue'
import faqSection from './components/faqSection.vue'
import staffSection from './components/staffSection.vue'
import discordSection from './components/discordSection.vue'

import getServer_one from './components/getServer.vue'
import getServer_two from './components/getServer.vue'

/** If you need more that two servers add them like this:
* import getServer_three from './components/getServer.vue'
* import getServer_four from './components/getServer.vue'
*/

export default {
  name: 'RSWT',
  created(){
        document.title = Config.TITLE_SHORT
    },
  data() { 
    return {
        shortTitle: Config.TITLE_SHORT,
        fullTitle: Config.TITLE_FULL,
        projectSlogan: Config.PRJ_SLOGAN,
        discordServerID: Config.DISCORD_ID,

        serverOneApiKey: Config.S1_API_KEY,
        serverOneBannerImage: Config.S1_BANNER,
        serverOneDescription: Config.S1_DESC,

        serverTwoApiKey: Config.S2_API_KEY,
        serverTwoBannerImage: Config.S2_BANNER,
        serverTwoDescription: Config.S2_DESC,

        /* Add more servers by edit & uncomment below */

        /** If you need more that two servers add them like this:
        * serverThreeApiKey: Config.S3_API_KEY,
        * serverThreeBannerImage: Config.S3_BANNER,
        * serverThreeDescription: Config.S3_DESC,
        *
        * serverFourApiKey: Config.S4_API_KEY,
        * serverFourBannerImage: Config.S4_BANNER,
        * serverFourDescription: Config.S4_DESC,
        */

        /* Add more servers by edit & uncomment above */

    };
  },
  components: {
    NavBar,
    mainIndex,
    getServer_one,
    getServer_two,

    /** If you need more that two servers add them like this:
    * getServer_three,
    * getServer_four,
    */

    storeSection,
    faqSection,
    rulesSection,
    staffSection,
    discordSection,
    mainFooter
  }
}
</script>

<style>
@import url( 
'https://fonts.googleapis.com/css?family=Roboto+Slab:300'); 
:root {
    --color-white: #FFFFFF;
    --color-dark: #06000a;
    --color-lt-dark: #151413;
    --color-mid-dark: #0b0b0a;
    --color-rust: #cd412b;
    --color-mute: #948c87;
    --color-online: #198754;
    --color-offline: #dc3545;
    --color-lt-blue: #62a7e3;
    --color-lt-green: #8bc53f;
    --color-highlight: #e6e6e8;
}
::-webkit-scrollbar-track{
    background-color: rgba(6, 0, 10, 1);
}
::-webkit-scrollbar{
    width: 3px;
    background-color: rgba(6, 0, 10, 1);
}
::-webkit-scrollbar-thumb{
    background-color: var(--color-rust);
}
body {
    position: relative;
    background-color: var(--color-dark);
    font-size: 16px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
    text-size-adjust: 100%;
    color: var(--color-highlight);
    font: normal 1em 'Roboto Slab', sans-serif;
}
#app {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: var(--color-highlight);
}
.tabs {
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.tabs .spoon {
    margin-right: 1rem;
    margin-bottom: 2em;
}
.spoon.is-medium {
    font-size: 1.6rem;
    padding: .5rem 1rem;
}
.spoon.is-primary {
    background: var(--color-rust);
    color: #fff;
}
.spoon {
    padding: .3rem .7rem;
    text-decoration: none;
    justify-content: center;
    align-items: center;
    white-space: nowrap;
    display: inline-flex;
    border: 0;
    cursor: default;
    text-transform: uppercase;
    transition: all .15s ease;
}
section.rules,section.store,section.staff,section.community,section.social {
    border-bottom: 1px solid rgba(230,230,232,.1);
}
.nav-tabs .nav-link,.btn,.btn-lg {border-radius: 0!important;}
.face {
    min-height: 100vh;
    position: relative;
    background-position: center;
    background-size: cover;
    align-items: stretch;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.face-body {
    align-items: center;
    display: flex;
    background: linear-gradient(rgba(6, 0, 10, 0.5), rgba(6, 0, 10, 0.75), var(--color-dark));
    z-index: 1;
    flex-grow: 1;
    flex-shrink: 0;
    padding: 3rem 1.5rem;
}
.face.face-body > .container {
    flex-grow: 1;
    flex-shrink: 1;
}
.face-title.one {
    color:var(--color-white);
    font-size: 3rem;
}
.face-subtitle {
    color:var(--color-white);
    font-size: 1rem;
}
.face.face-subtitle {
    color: #c5bbb4;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.25;
}
.section {
    padding: 3rem 1.5rem;
    display: block;
}
.fullvideo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
}
.fullvideo video {
    position: relative;
    height: 100%;
    width: 177.77777778vh;
    min-width: 100%;
    min-height: 56.25vw;
    object-fit: cover;
}
img, embed, object, audio, video {
    max-width: 100%;
}
</style>
