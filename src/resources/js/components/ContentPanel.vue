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

<style lang="scss">
    @import "../../sass/utilities";

    :root {
        --panel-heading-font-size: 0.8rem;
        --panel-heading-line-height: 1.5;
        --panel-heading-x-padding: 1.5rem;
        --panel-heading-y-padding: 0.75rem;
    }

    ._laravel-admin .content-panel {
        background: white;
        font-size: 1rem;
        box-shadow: 0px 0 8px 1px var(--layout-border-color);

        .body {
            padding: 0 1.5rem;
            max-height: 0px;
            overflow: hidden;
            transition: 0.3s ease all;

            &.is-open {
                padding: 1rem 1.5rem;
                max-height: none;
                overflow: auto;
            }
        }

        .header {
            display: flex;
            border-bottom: 1px solid var(--layout-border-color);

            .title {
                flex: 1 1 auto;
                padding: var(--panel-heading-y-padding) var(--panel-heading-x-padding);
                font-size: var(--panel-heading-font-size);
                line-height: var(--panel-heading-line-height);
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 0.5px;
            }
        }

        button.action {
            height: 100%;
            width: calc((var(--panel-heading-font-size) * var(--panel-heading-line-height)) + (var(--panel-heading-y-padding) * 2));
            @include clearAppearance;
            font-size: 0.6rem;
            font-weight: normal;
            border-left: 1px solid var(--layout-border-color);
            cursor: pointer;
        }
    }
</style>
