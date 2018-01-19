<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>component kullanımı</title>
    <script src="<?= base_url('/js/vue.js') ?>"></script>
    <script src="<?= base_url('/js/httpVueLoader.js') ?>"></script>
    <!--
    <script src="https://unpkg.com/http-vue-loader"></script>
    -->
</head>
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