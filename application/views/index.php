<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CODEIGNITER PRACTICE with VUE</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

</head>
<body>
<a href="<?=base_url('/welcome/vue_cart')?>">Vue Cart</a>
<hr>
<div id="app">
    {{ message }}
    <div v-html="msg1"></div>
    <h3 v-text="msg2"></h3>
    <p v-if="isLoggedIn">LoggedIn</p>
    <p v-if="!isLoggedIn">Not LoggedIn</p>

    <p v-show="isLoggedIn">LoggedIn</p>
    <p v-show="!isLoggedIn">Not LoggedIn</p>
</div>




<p>V-if ile v-show arasında bir fark var , vshow sadece dispay propunu değiştiriyor. vif ise , domda olup olmamasını sağlar


</p>

</body>
</html>

<script type="text/javascript" src="<?=base_url('/js/app.js')?>"></script>

