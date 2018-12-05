
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./custome');



import Vue from "vue";
import BootstrapVue from "bootstrap-vue";
import "babel-polyfill";


Vue.use(BootstrapVue);
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('navbar-component', require('./components/navbarComponent.vue'));
Vue.component('hero-component', require('./components/hero-Component.vue'));
Vue.component('aboutus-component', require('./components/aboutUsComponent.vue'));
Vue.component('frequently-component', require('./components/slid-component.vue'));
Vue.component('slid-component', require('./components/frequentlyAsk.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 * 
 */


const app = new Vue({
    el: '#app'
});

