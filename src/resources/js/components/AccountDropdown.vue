<template>
    <div :id="id" class="la_account-dropdown la_close-on-clickaway">

        <button @click="onClick" :class="{'is-active' : isActive, 'with-avatar': showAvatar}">
            <div class="user-avatar" v-if="showAvatar" :style="avatarUrlStyle"></div>
            {{ label }}
            <i class="fa fa-chevron-down"></i>
        </button>

        <div class="la_dropdown-menu">
            <ul>
                <li v-for="item in menuLinks">
                    <a :href="item.url">{{ item.label }}</a>
                </li>
                <li v-if="showLogout">
                    <form :action="logoutUrl" method="post">
                        <input type="hidden" name="_method" value="POST" />
                        <input type="hidden" name="_token" v-model="csrfToken" />
                        <button>Logout</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
    import { eventBus } from './../eventBus';

    export default {
        props: {
            "id" : { type: String, default: "account-dropdown" },
            "label" : { type: String, default: "Account" },
            "menuLinks" : { type: Array, default: [] },
            "showAvatar" : { type: Boolean, default: true },
            "showLogout" : { type: Boolean, default: true },
            "logoutUrl" : { type: String, default: "/logout" },
            "avatarImage" : {
                type: String,
                default: "data:image/png;base64 ,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"
            }
        },
        data() {
            return {
                isActive: false
            }
        },
        computed: {
            avatarUrlStyle() {
                return "background-image: url('"+this.avatarImage+"');";
            },
            csrfToken() {
                return $("meta[name='csrf-token']").attr("content");
            }
        },
        mounted() {
            var vm = this;
            eventBus.$on("close_la_menus", function() {
                vm.isActive = false;
            });
        },
        methods: {
            onClick() {
                if (window.laActiveMenu != this.id && window.laActiveMenu != "") {
                    eventBus.$emit("close_la_menus");
                }

                this.isActive = !this.isActive;
                var activeMenu = this.isActive ? this.id : "";
                eventBus.$emit("la_menu_clicked", activeMenu);
            }
        }
    }
</script>

<style lang="scss">
    @import "../../sass/utilities";

    :root {
        --account-dropdown-button-fontsize: 0.9rem;
        --account-dropdown-button-vertical-padding: calc((var(--header-height) - var(--account-dropdown-button-fontsize)) / 2);
        --account-dropdown-button-horizontal-padding: 1rem;
        --account-dropdown-menu-width: 11rem;
        --account-dropdown-left-border: 1px solid #e2e7ef;
        --account-dropdown-avatar-size: 1.8rem;
    }

    .la_account-dropdown {
        position: relative;

        button {
            position: relative;
            font-size: var(--account-dropdown-button-fontsize);
            padding: var(--account-dropdown-button-vertical-padding) var(--account-dropdown-button-horizontal-padding);
            &.with-avatar {
                padding-left: calc((var(--account-dropdown-button-horizontal-padding) * 2) + var(--account-dropdown-avatar-size));
            }
            margin: 0;
            line-height: 1;
            -webkit-appearance: none;
            background: transparent;
            cursor: pointer;
            border: none;
            border-left: var(--account-dropdown-left-border);
            transition: 0.3s ease all;
            color: var(--body-color);
            @include no-select;

            i.fa {
                font-size: 0.6rem;
                margin-left: 0.5rem;
                vertical-align: middle;
                margin-top: -3px;
                color: #333;
                transition: 0.3s ease all;
            }

            .user-avatar {
                position: absolute;
                top: 50%;
                left: var(--account-dropdown-button-horizontal-padding);
                transform: translateY(-50%);
                max-height: var(--account-dropdown-avatar-size);
                max-width: var(--account-dropdown-avatar-size);
                width: var(--account-dropdown-avatar-size);
                height: var(--account-dropdown-avatar-size);
                background-size: cover;
                border-radius: 0.3rem;
                border: 1px solid #dadada;
            }
        }

        .la_dropdown-menu {
            display: none;
            background: white;
            position: absolute;
            top: 100%;
            right: 0;
            width: var(--account-dropdown-menu-width);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

            ul {
                padding: 1rem 0;
                margin: 0;

                li {
                    list-style-type: none;

                    a, button {
                        display: block;
                        width: 100%;
                        font-size: 0.9rem;
                        color: #333;
                        padding: 0.5rem 1.5rem;
                        line-height: 1;
                        text-align: left;
                        transition: 0.3s ease all;

                        &:hover {
                            background: rgba(0, 0, 0, 0.05);
                            text-decoration: none;
                        }
                    }
                }
            }
        }

        // Active state
        button.is-active {

            i.fa {
                transform: rotate(180deg);
            }

            & + .la_dropdown-menu {
                display: block;
            }
        }

        button:focus {
            outline: none;
        }

        button:hover, &.is-active > button {
            background: var(--main-nav-hover-bg, rgba(0, 0, 0, 0.1));
        }
    }

</style>
