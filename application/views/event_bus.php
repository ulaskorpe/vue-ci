<?php
//phpinfo();
?>

<!doctype html>
<html lang="tr">
<?php include "partials/head.php" ?>
<body>
<?php include "partials/menu.php" ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div id="vue-app" class="divx">
    <Basic>
        <p slot="one">SOMEHTML TEXT slot one</p>
        <p slot="two">SOMEHTML TEXT slot two</p>

    </Basic>
    <button v-on:click="changeComponent()">change</button>
    <keep-alive>
    <component v-bind:is="selected"></component>
    </keep-alive>




</div>



<script src="<?= base_url('/js/event_bus.js') ?>"></script>

</body>
<script>


</script>
<style scoped>

    p{
        color:blue;
    }
    .divx{
        border: 1px solid #ccc;
        width: 1500px;
        height: 800px;
        float: left;
        margin-left: 50px;
    }

</style>
</html>