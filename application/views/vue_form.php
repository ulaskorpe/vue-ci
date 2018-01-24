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

    <div class="c1">
    <form action="<?=base_url('welcome/post_form')?>" method="post" id="formToSend" enctype="">
    <input type="text" name="title" id="title" v-model.lazy="blog.title"><br>
    <textarea name="content" id="content" cols="30" rows="10" v-model.lazy="blog.content"></textarea><br>

    <div id="checkboxes">
        <label for="">Ninjas</label>
        <input type="checkbox" value="ninjas" name="ninjas" id="ninjas" v-model="blog.categories"><br>

        <label for="">Wizards</label>
        <input type="checkbox" value="wizards" name="wizards" id="wizards" v-model="blog.categories"><br>

        <label for="">Warriors</label>
        <input type="checkbox" value="warriors" name="warriors" id="warriors" v-model="blog.categories"><br>

        <label for="">Dragons</label>
        <input type="checkbox" value="dragons" name="dragons" id="dragons" v-model="blog.categories"><br>
    </div>
    <label for="">Author</label>
    <select name="author" id="author" v-model="blog.author">
       <option v-for="author in authors">{{author}}</option>
    </select>
        <input type="submit" value="gönder">
    <p><button v-on:click.prevent="submitFunction()">Submit</button></p>
    </form>

    <div v-if="submitted">POSTED!!</div>
    <p>title : {{blog.title}}</p>
    <p>{{blog.content}}</p>
    <p><ul>
        <li v-for="category in blog.categories">{{category}}</li>
    </ul></p>
    <p>
      Author :  {{blog.author}}
    </p>
    </div>


    <div class="c1">
        <showblogs></showblogs>

    </div>
    <div class="c1">{{postData}}</div>
</div>



<script src="<?= base_url('/node_modules/vue-resource/dist/vue-resource.js') ?>"></script>
<script src="<?= base_url('/js/vue_form.js') ?>"></script>

</body>
<script>


</script>
<style scoped>

    .c1{
        width: 500px;
        height: auto;
        border: 1px solid #ccc;
        background: #f4f4f4;
        float: left;
        margin-left: 10px;
    }
    p{
        color:blue;
    }
    .divx{
        border: 1px solid #ccc;
        width: 100%;
        height: auto;
        float: left;
        margin: 20px;
        padding: 10px;
    }

</style>
</html>