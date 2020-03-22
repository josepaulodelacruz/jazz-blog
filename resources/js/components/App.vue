<template>
    <router-view>
    </router-view>
</template>

<script>
    export default {
        data () {
            return {
                currentPage: 'home'
            }
        },


        methods: {
            navigateTo: function (val) {
                this.currentPage = val

            }
        }
    }
</script>

<style>

</style>
