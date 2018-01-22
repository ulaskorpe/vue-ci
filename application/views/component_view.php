<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>component kullanımı</title>
    <script src="<?=base_url('/js/vue.js') ?>"></script>
    <script src="<?=base_url('/js/component.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('/css/app.css')?>">
</head>
<body>
<?php include "partials/menu.php"?>
<div id="app">


    <vue-cart
            v-bind:cart=cart
            title="Shopping Cart"
            type="shoppingCart"
            v-on:itemchangedoncart="handleItemChange"
    ></vue-cart>

    <vue-cart
            v-bind:cart=saved
            title="Saved for later"
            type="savedCart"
            v-on:itemchangedoncart="handleItemChange"
    ></vue-cart>

    <hello></hello>
</div>
</body>
</html>