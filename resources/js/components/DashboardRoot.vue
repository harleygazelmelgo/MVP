<template>
  <div id='app' >
    <Header />
    <Dashboard />
    <Footer />


  </div>
</template>

<script>

import Header from '../components/Header.vue'
import Dashboard from '../components/Dashboard.vue'
import Footer from '../components/Footer.vue'




export default {
  name: 'DashboardRoot',
  components: {
    Header,
    Dashboard,
    Footer,



  },
  mounted() {
      console.log('');
  }
}
</script>

