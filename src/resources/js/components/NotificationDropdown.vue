<template>
    <div class="notifications-dropdown" :id="id" :class="{ 'has-unread' : hasUnread }">
        <button @click.prevent="onClick" :class="{ 'is-active' : isActive }">
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
            onClick() {
                this.isActive = !this.isActive;
                this.hasUnread = false;
            }
        }
    }
</script>
