<template>
  <div id='app' >
    <Header />
    <AboutUs />
    <Footer />

  </div>
</template>

<script>

import Header from '../components/Header.vue'
import AboutUs from '../components/AboutUs.vue'
import Footer from '../components/Footer.vue'




export default {
  name: 'AboutRoot',
  components: {
    Header,
    AboutUs,
    Footer,



  },
  mounted() {
      console.log('');
  }
}
</script>

