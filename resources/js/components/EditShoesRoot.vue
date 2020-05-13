<template>
  <div id='app' >
    <Header />
    <EditShoes />
    <Footer />

  </div>
</template>

<script>

import Header from '../components/Header.vue'
import EditShoes from '../components/EditShoes.vue'
import Footer from '../components/Footer.vue'




export default {
  name: 'EditShoesRoot',
  components: {
    Header,
    EditShoes,
    Footer,



  },
  mounted() {
      console.log('');
  }
}
</script>

