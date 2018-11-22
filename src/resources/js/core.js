window.Vue = require('vue');

// Load components
import AccountDropdown from './components/AccountDropdown';
Vue.component('account-dropdown', AccountDropdown);

// Initialise Vue
const app = new Vue({
    el: '#laravel-admin_app'
});
