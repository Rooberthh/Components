/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dropdown-menu', require('./components/Dropdown.vue').default);
Vue.component('file-upload', require('./components/FileUpload.vue').default);
Vue.component('tabs', require('./components/Tabs.vue').default);
Vue.component('tab', require('./components/Tab.vue').default);
Vue.component('user-notifications', require('./components/UserNotifications.vue').default);
Vue.component('color-picker', require('./components/ColorPicker.vue').default);
Vue.component('spinner', require('./components/Spinner.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
