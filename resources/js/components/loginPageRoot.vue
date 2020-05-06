<template>
  <div id='app' >
    <Header />
    <loginPage />
    <Footer />

  </div>
</template>

<script>

import Header from '../components/Header.vue'
import loginPage from '../components/loginPage.vue'
import Footer from '../components/Footer.vue'



export default {
  name: 'JordanRoot',
  components: {
    Header,
    loginPage,
    Footer,


  },
  mounted() {
      console.log('');
  }
}
</script>

