<?php
//phpinfo();
?>

<!doctype html>
<html lang="tr">
<?php include "partials/head.php" ?>
<body>
<?php include "partials/menu.php" ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div id="vue-app-one" class="divx">
    {{title}}
    <greeting></greeting>

    <Ulascomponent></Ulascomponent>
</div>

<div id="vue-app-two" class="divx">

    {{title}}<br>
    <button v-on:click="changeTitle()">Change one's title</button>
    <greeting></greeting>

    <h3 ref="hx">REFS</h3>
    <input type="text" ref="input1"><br>
    <button v-on:click="readRefs()">submit</button>
</div>


<script src="<?= base_url('/js/vue_punchbag.js') ?>"></script>

</body>
<script>


</script>
<style>

    .divx{
        border: 1px solid #ccc;
        width: 500px;
        height: 800px;
        float: left;
        margin-left: 50px;
    }

</style>
</html>