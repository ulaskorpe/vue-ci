<!doctype html>
<html lang="tr">
<?php include "partials/head.php"?>
<body>
<?php include "partials/menu.php" ?>
<div id="vue-app">

<p>{{greet()}}</p>
    <a v-bind:href="website" target="_blank">NINJA TUTORIAL</a><br>
    <input type="text" v-bind:value="name">
    <p v-html="webtag">  </p>
</div>


<script src="<?=base_url('/js/vue_instance.js')?>"></script>

</body>
<script>


</script>
<style>

</style>
</html>