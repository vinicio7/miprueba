

require('./bootstrap');
import DataTable from 'laravel-vue-datatable';
window.Vue = require('vue');
Vue.component('users-component', require('./components/UserComponent.vue').default);
Vue.use(DataTable);

const app = new Vue({
    el: '#app',
});


