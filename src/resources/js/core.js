window.Vue = require('vue');

// Load components
import AccountDropdown from './components/AccountDropdown';
Vue.component('account-dropdown', AccountDropdown);

import HeaderSearchForm from './components/HeaderSearchForm';
Vue.component('search-form', HeaderSearchForm);

// Initialise Vue
const app = new Vue({
    el: '#laravel-admin_app'
});

// Menu toggle
$(function() {
    var menuToggleButton = $("._laravel-admin button.menu-toggle");
    var searchToggleButton = $("._laravel-admin button.show-search");
    var sidebar = $("._laravel-admin .main-sidebar");
    var headerSearch = $("._laravel-admin .la_header-search-form");

    menuToggleButton.on("click", function (event) {
        event.preventDefault();
        var $this = $(this);
        if ($this.hasClass("is-active")) {
            $this.removeClass("is-active");
            sidebar.removeClass("open");
        } else {
            $this.addClass("is-active");
            sidebar.addClass("open");
        }
    });

    searchToggleButton.on("click", function (event) {
        event.preventDefault();
        var $this = $(this);
        if ($this.hasClass("is-active")) {
            $this.removeClass("is-active");
            headerSearch.removeClass("open");
        } else {
            $this.addClass("is-active");
            headerSearch.addClass("open");
        }
    });

    // Clear menu and search classes if width > breakpoint
});
