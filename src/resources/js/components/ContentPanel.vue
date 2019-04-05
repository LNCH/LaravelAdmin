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

    ._laravel-admin .content-panel {
        background: var(--background);
        font-size: var(--font-size);
        box-shadow: var(--box-shadow);

        .body {
            padding: 0 var(--body-x-padding);
            max-height: 0px;
            overflow: hidden;
            transition: var(--body-transition);

            &.is-open {
                padding: var(--body-y-padding) var(--body-x-padding);
                max-height: none;
                overflow: auto;
            }

            .full-width {
                margin-left: calc(var(--body-x-padding) * -1);
                width: calc(100% + (var(--body-x-padding) * 2));
                border-left: none;
                border-right: none;

                tr {
                   td:first-child, th:first-child {
                       padding-left: var(--body-x-padding);
                       border-left: none;
                   }
                   td:last-child, th:last-child {
                       padding-right: var(--body-x-padding);
                       border-right: none;
                   }
                }
            }
        }

        .header {
            display: flex;
            border-bottom: var(--header-bottom-border);
            @include no-select;

            .title {
                flex: 1 1 auto;
                padding: var(--heading-y-padding) var(--heading-x-padding);
                font-size: var(--heading-font-size);
                line-height: var(--heading-line-height);
                text-transform: var(--heading-text-transform);
                font-weight: var(--heading-font-weight);
                letter-spacing: var(--heading-letter-spacing);
            }
        }

        button.action {
            height: 100%;
            width: calc((var(--heading-font-size) * var(--heading-line-height)) + (var(--heading-y-padding) * 2));
            @include clearAppearance;
            font-size: var(--action-button-font-size);
            font-weight: var(--action-button-font-weight);
            border-left: var(--action-button-divider-border);
            cursor: pointer;
            transition: var(--action-button-transition);

            &:focus {
                outline: none;
            }

            &:hover {
                background: var(--action-button-hover-background);
            }
        }
    }
</style>
