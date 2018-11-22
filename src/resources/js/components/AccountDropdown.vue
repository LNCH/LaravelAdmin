<template>
    <div class="la_account-dropdown la_close-on-clickaway">

        <button @click="onClick" :class="{'is-active' : isActive, 'with-avatar': showAvatar}">
            <div class="user-avatar" v-if="showAvatar"
                 :style="avatarUrlStyle">
            </div>
            {{ label }}
            <i class="fa fa-chevron-down">
            </i>
        </button>

        <div class="la_dropdown-menu">
            <ul>
                <li v-for="item in menuLinks">
                    <a :href="item.url">{{ item.label }}</a>
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
    // TODO: make avatar optional
    export default {
        props: {
            "label": { type: String, default: "Account" },
            "menuLinks": { type: Array, default: [] },
            "showAvatar": { type: Boolean, default: true },
            "avatarImage": {
                type: String,
                default: "https://randomuser.me/api/portraits/women/57.jpg"
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
            }
        },
        methods: {
            onClick() {
                this.isActive = !this.isActive;
            }
        }
    }
</script>

<style lang="scss">
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
                border-radius: 10%;
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

                    a {
                        display: block;
                        font-size: 0.9rem;
                        color: #333;
                        padding: 0.5rem 1.5rem;
                        line-height: 1;
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

        button:hover, button.is-active {
            background: rgba(0, 0, 0, 0.1);
        }
    }

</style>
