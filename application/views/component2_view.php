<!doctype html>
<html lang="tr">
<?php include "partials/head.php"?>
<body>
<?php include "partials/menu.php" ?>
<div id="app">
    <p v-if="isLoading"><img src="<?= base_url('/img/loading.gif') ?>" alt=""></p>
    <div v-if="!isLoading">
        <Search v-on:searchrequested="handleSearch"></Search>
        <Preview v-bind:gifs="gifs"></Preview>
    </div>

</div>
</body>
<script>
    // httpVueLoader.register(Vue, '../components/search.vue');
    new Vue({
        el: '#app',
        //   components:   ['search']
        components: {
            'Search': httpVueLoader('../components/search.vue'),
            'Preview': httpVueLoader('../components/preview.vue')
        },

        data() {
            return {
                isLoading: true,
                gifs: []
            }
        },
        methods: {

            doQuery(url) {
                fetch(url)
                 .then((res) => { return res.json() } )
                .then((res) => {
                this.gifs = res.data;
                this.isLoading = false;
            })
            },

            handleSearch(query) {
                this.gifs = [];
                this.isLoading = true;
                const url = `http://api.giphy.com/v1/gifs/search?q=${query}&api_key=dc6zaTOxFJmzC`;
                this.doQuery(url);

            }

        },
        created() {
            //'http://api.giphy.com/v1/gifs/trending?api_key=dc6zaTOxFJmzC'
            const url = 'http://api.giphy.com/v1/gifs/trending?api_key=dc6zaTOxFJmzC';
            this.doQuery(url);
        }

    });

</script>
<style>

</style>
</html>