require('./bootstrap');

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});


window.Vue = require('vue');


Vue.component('Root', require('./components/Root.vue').default);
Vue.component('Header', require('./components/Header.vue').default);
Vue.component('Body', require('./components/Body.vue').default);
Vue.component('Footer', require('./components/Footer.vue').default);

Vue.component('AboutRoot', require('./components/AboutRoot.vue').default);
Vue.component('BasketballRoot', require('./components/BasketballRoot.vue').default);
Vue.component('JordanRoot', require('./components/JordanRoot.vue').default);
Vue.component('DashboardRoot', require('./components/DashboardRoot.vue').default);





const app = new Vue({
    el: '#app',
});
