
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('editor', require('./components/Editor'));
Vue.component('editor-canvas', require('./components/EditorCanvas'));
Vue.component('editor-properties', require('./components/EditorProperties'));
Vue.component('editor-components', require('./components/EditorComponents'));

import { Button }  from "./engine"

Vue.prototype.bus = new Vue({})

const app = new Vue({
    el: '#app',
    mixins: [
      Button
    ],
    mounted: function() {
        console.log('mounted')
    },
    methods: {
      save: function() {
        console.log('save')
      },
      resize_desktop: function() {
        this.bus.$emit('resize_desktop')
      },
      resize_mobile: function() {
        this.bus.$emit('resize_mobile')
        console.log('resize_mobile')
      }

    }
  }
);
