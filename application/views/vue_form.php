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
    <input type="text" v-model.lazy="blog.title"><br>
    <textarea name="content" id="content" cols="30" rows="10" v-model.lazy="blog.content"></textarea><br>
    


    <p>title : {{blog.title}}</p>
    <p>{{blog.content}}</p>

</div>



<script src="<?= base_url('/js/vue_form.js') ?>"></script>

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