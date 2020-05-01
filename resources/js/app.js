
require('./bootstrap');

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});


window.Vue = require('vue');


Vue.component('Root', require('./components/Root.vue').default);
Vue.component('Header', require('./components/Header.vue').default);
Vue.component('Body', require('./components/Body.vue').default);
Vue.component('AboutUs', require('./components/AboutUs.vue').default);
Vue.component('Basketball', require('./components/Basketball.vue').default);



const app = new Vue({
    el: '#app',
});



