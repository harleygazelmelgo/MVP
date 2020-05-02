<template>
  <div id='app' >
    <Header />
    <Jordan />
    <Footer />

  </div>
</template>

<script>

import Header from '../components/Header.vue'
import Jordan from '../components/Jordan.vue'
import Footer from '../components/Footer.vue'



export default {
  name: 'JordanRoot',
  components: {
    Header,
    Jordan,
    Footer,


  },
  mounted() {
      console.log('');
  }
}
</script>

