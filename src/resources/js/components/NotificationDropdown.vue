<template>
    <div class="notifications-dropdown" :id="id" :class="{ 'has-unread' : hasUnread, 'is-active' : isActive }">
        <button @click.prevent.stop="onClick">
            <i class="fa fa-bell-o"></i>
        </button>

        <div class="dropdown-content">
            <div class="title" v-if="title">{{ title }}</div>

            <div class="body">
                <slot></slot>
            </div>

            <div class="footer">
                <a href="#" class="read-more">See All</a>
            </div>
        </div> <!-- End .dropdown-content -->
    </div> <!-- End .notifications-dropdown -->
</template>

<script>
    export default {
        name: 'notification-dropdown',
        props: {
            id: {
                type: String
            },
            title: {
                type: String
            }
        },
        data() {
            return {
                isActive: false,
                hasUnread: false
            };
        },
        methods: {
            onClick(event) {
                window.closeActiveWindow(event);
                var $dropdown = $("#"+this.id);
                $dropdown.toggleClass("is-active");
                this.hasUnread = false;

                if ($dropdown.hasClass("is-active")) {
                    window.laActiveMenu = this.id;
                } else if (window.laActiveMenu == this.id) {
                    window.laActiveMenu = null;
                }
            }
        }
    }
</script>
