<template>
    <div class="content-panel">

        <div class="header" v-if="hasSlot('header') || hasSlot('header-icons') || isCollapsible">
            <!-- Title -->
            <div class="title">
                <slot name="header">&nbsp;</slot>
            </div>
            <div class="icons">
                <!-- Icon Links, Dropdown Menu (Options) -->
                <slot name="header-icons"></slot>
                <!-- Collapse Button -->
                <button class="action" @click.prevent="collapsed = !collapsed" v-if="isCollapsible">
                    <i class="fa fa-fw" :class="{ 'fa-minus' : !collapsed, 'fa-plus' : collapsed }"></i>
                </button>
            </div>
        </div> <!-- End .header -->

        <div class="body" :class="{ 'is-open': isOpen }">
            <slot></slot>

            <div class="footer">
                <!-- Pagination -->
                <!-- Action Buttons -->
            </div> <!-- End .footer -->
        </div> <!-- End .body -->

    </div> <!-- End .content-panel -->
</template>

<script>
    export default {
        name: 'ContentPanel',
        props: {
            isCollapsible: {
                type: Boolean,
                default: false
            },
            isCollapsed: {
                type: Boolean,
                default: false
            }
        },
        data() {
            return {
                collapsed: this.isCollapsed
            }
        },
        computed: {
            isOpen() {
                return !this.isCollapsible ? true : !this.collapsed;
            },
        },
        methods: {
            hasSlot(name = 'default') {
                return !!this.$slots[name] || !!this.$scopedSlots[name];
            }
        }
    }
</script>
