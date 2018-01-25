<!doctype html>
<html lang="tr">
<?php include "partials/head.php"?>
<body>
<?php include "partials/menu.php"?>
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

