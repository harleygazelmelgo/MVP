<template>
  <div id="app">
    <Header />
    <Body />
    <AboutUs />
    <Basketball />

  </div>
</template>

<script>

import Header from '../components/Header.vue'
import Body from '../components/Body.vue'
import AboutUs from '../components/AboutUs.vue'
import Basketball from '../components/Basketball.vue'



export default {
  name: 'Root',
  components: {
    Header,
    Body,
    AboutUs,
    Basketball,


  },
  mounted() {
      console.log('');
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
