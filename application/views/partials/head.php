<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>component kullanımı</title>
    <script src="<?= base_url('/js/vue.js') ?>"></script>
    <script src="<?= base_url('/js/httpVueLoader.js') ?>"></script>
    <script src="<?= base_url('/node_modules/vue-router/dist/vue-router.js') ?>"></script>
    <script src="<?= base_url('/js/routes.js') ?>"></script>
    <!--
    <script src="https://unpkg.com/http-vue-loader"></script>
    -->

    <script>
        const router = new VueRouter({
            route: [
                {path:'/ulascomponent',component:  'components/ulascomponent.vue'},
                {path:'/basic',component:  './components/basic.vue'}
                   ]
        });

    </script>

</head>