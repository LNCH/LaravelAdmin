<template>
    <div class="notifications-dropdown" :id="id" :class="{ 'is-active' : isActive }">
        <button @click.prevent="onClick">
            <i class="fa" :class="icon"></i>
        </button>

        <div class="dropdown-content">
            <div class="title" v-if="title">{{ title }}</div>
            <div class="body"><slot></slot></div>
            <div class="footer" v-if="showMoreText && showMoreUrl">
                <a :href="showMoreUrl" class="read-more">{{ showMoreText }}</a>
            </div>
        </div> <!-- End .dropdown-content -->
    </div> <!-- End .notifications-dropdown -->
</template>

<script>
    import { eventBus } from './../eventBus';

    export default {
        name: 'notification-dropdown',
        props: {
            id: { type: String, required: true },
            icon: { type: String, default: "fa-bell-o" },
            title: { type: String },
            hasUnread: { type: Boolean, default: false },
            showMoreText: { type: String, default: "Show More" },
            showMoreUrl: { type: String }
        },
        data() {
            return {
                isActive: false,
                unread: this.hasUnread
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
                this.unread = false;
                var activeMenu = this.isActive ? this.id : "";
                eventBus.$emit("la_menu_clicked", activeMenu);
            }
        }
    }
</script>
