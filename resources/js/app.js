
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('vue-carousel');
require('aos');

import AOS from 'aos'

window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('my-carousel', require('./components/Carousel.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    created () {
      AOS.init({
        duration: 2000,
      })
    },
    methods: {
      companyShowMore: function (event) {
        $('.company-short-desc').css('display','none');
        $('.company-long-desc').css('display','block');
        $('.btn-show-more').addClass('d-none');
        $('.btn-show-less').removeClass('d-none');
      },
      companyShowLess: function (event) {
        $('.company-short-desc').css('display','block');
        $('.company-long-desc').css('display','none');
        $('.btn-show-more').removeClass('d-none');
        $('.btn-show-less').addClass('d-none');
      }
    }
});
