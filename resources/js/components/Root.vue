<template>
  <div id='app' >
    <Header />
    <Body />
    <Footer />


  </div>
</template>

<script>

import Header from '../components/Header.vue'
import Body from '../components/Body.vue'
import Footer from '../components/Footer.vue'




export default {
  name: 'Root',
  components: {
    Header,
    Body,
    Footer,



  },
  mounted() {
      console.log('');
  }
}
</script>

<style>
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color:black;

} */
</style>
