<template>
  <div id='app' >
    <Header />
    <Basketball />
    <Footer />


  </div>
</template>

<script>

import Header from '../components/Header.vue'
import Basketball from '../components/Basketball.vue'
import Footer from '../components/Footer.vue'




export default {
  name: 'BasketballRoot',
  components: {
    Header,
    Basketball,
    Footer,



  },
  mounted() {
      console.log('');
  }
}
</script>

