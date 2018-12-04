<template>
    <div class="content-panel">
        <div class="header">
            <!-- Title -->
            <!-- Icon Links -->
            <!-- Dropdown Menu (Options) -->
            <!-- Collapse Button -->
        </div> <!-- End .header -->
        <div class="body">
            <slot></slot>
        </div> <!-- End .body -->
        <div class="footer">
            <!-- Pagination -->
            <!-- Action Buttons -->
        </div> <!-- End .footer -->
    </div> <!-- End .content-panel -->
</template>

<script>
    export default {
        name: 'ContentPanel'
    }
</script>

<style lang="scss">
    ._laravel-admin .content-panel {
        background: white;
        font-size: 1rem;

        .body {
            padding: 1rem 1.5rem;
        }
    }
</style>
