<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VUE CART</title>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    -->
    <script src="<?=base_url('/js/vue.js') ?>"></script>

</head>
<body>
<?php include "partials/menu.php"?>
<div id="app2">
    <p v-if="isLoading"><img src="<?=base_url('/img/loading.gif')?>" alt=""></p>
    <div v-if="!isLoading">
    <table>
        <tr>
            <td valign="top">
                <b>CART {{cart.length}}</b><br>
                <p v-if="!cart.length">CART BOŞ</p>
                <div class="cart">


                    <div class="item" v-for="(item,index) in cart">

                        {{item.name}}<br>
                        {{item.url}}<br>
                        {{item.seller}}<br>

                        <img v-bind:src="item.image" width="150"><br>
                        <p v-if="item.isEligible">Eligible</p>

                        <p v-if="item.isAvailable">Available</p>
                        <p v-text="item.price"></p>
                        <a href="#" v-on:click="removeFromCart(index)">SAVE</a>

                        <hr>
                    </div>

                </div>
            </td>

            <td valign="top">

                <b>SAVED {{saved.length}}</b><br>
                <p v-if="!saved.length">YOK</p>
                <div class="saved">


                    <div class="item" v-for="(item,index) in saved">

                        {{item.name}}<br>
                        {{item.url}}<br>
                        {{item.seller}}<br>

                        <img v-bind:src="item.image" width="150"><br>
                        <p v-if="item.isEligible">Eligible</p>

                        <p v-if="item.isAvailable">Available</p>
                        <p v-text="item.price"></p>
                        <a href="#" v-on:click="removeFromSaved(index)">CART</a>
                        <hr>
                    </div>

                </div>

            </td>
            <td>
                <p class="price">
                    CART TOTAL ({{cart.length}} Items) : {{cartTotal}}

                </p>
                <p class="price">
                    SAVED TOTAL ({{saved.length}} Items) : {{savedTotal}}

                </p>

            </td>
        </tr>

    </table>
    </div>
</div>

</body>
</html>
<script type="text/javascript" src="<?= base_url('/js/cart_app.js') ?>"></script>