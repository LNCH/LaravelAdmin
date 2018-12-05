<template>
    <div class="la_header-search-form">
        <form action="" @submit.prevent="onSubmit()" method="post">
            <div class="sr-only">Type and hit enter to search</div>
            <slot>
                <input type="hidden" name="_method" value="POST" />
                <input type="hidden" name="_token" v-model="csrfToken" />
                <div class="search-input-wrapper">
                    <input class="search-input" type="search" name="search" id="header_search"
                           placeholder="Type, then hit enter..." />
                    <i class="fa fa-search"></i>
                </div>
            </slot>
        </form>
    </div> <!-- End .la-header-search-form -->
</template>

<script>
    export default {
        computed: {
            csrfToken() {
                return $("meta[name='csrf-token']").attr("content");
            }
        },
        methods: {
            onSubmit() {
                console.log("submit");
            }
        }
    }
</script>

<style lang="scss">
    @import "../../sass/utilities";

    .la_header-search-form {
        padding-left: 1rem;
    }

    .search-input-wrapper {
        position: relative;

        i.fa.fa-search {
            position: absolute;
            top: 50%;
            left: 0.75rem;
            transform: translateY(-50%);
            font-size: 0.7rem;
            color: #bbbbbb;
            transition: 0.3s ease all;
        }
    }

    .search-input {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        border: 1px solid #e2e7ef;
        border-radius: 0.2rem;
        font-size: 0.7rem;
        padding: 0.3rem 0.75rem;
        padding-left: 2rem;
        color: #5a5a5a;
        @include no-select;

        &:focus {
            outline: none;
            border-color: darken(#e2e7ef, 10%);

            & + i.fa.fa-search {
                color: #7d7d7d;
            }
        }
    }
</style>
