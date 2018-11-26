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

$(document).on('keydown', function(event) {
    if(event.ctrlKey && event.altKey && event.keyCode == 70) {
        $("#header_search").focus();
    }
});

// Menu toggles
$(function() {
    var menuToggleButton = $("._laravel-admin button.menu-toggle");
    var searchToggleButton = $("._laravel-admin button.show-search");
    var sidebar = $("._laravel-admin .main-sidebar");
    var headerSearch = $("._laravel-admin .la_header-search-form");

    menuToggleButton.on("click", function (event) {
        event.preventDefault();

        searchToggleButton.removeClass("is-active");
        headerSearch.removeClass("open");

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

        menuToggleButton.removeClass("is-active");
        sidebar.removeClass("open");

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

    var mainNavigation = $("._laravel-admin .main-navigation ul");

    mainNavigation.on("click", "li.has-children", function (event) {
        if ($(event.target).closest("li").hasClass("has-children")) {
            event.preventDefault();
            event.stopPropagation();
            $(event.target).closest("li").toggleClass("active");
        }
    });
});
