<!doctype html>
<html lang="tr">
<?php include "partials/head.php"?>
<body>
<?php include "partials/menu.php" ?>
<div id="vue-app" v-on:mousemove="updateMouse">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<p>{{greet()}}</p>
    <a v-bind:href="website" target="_blank">NINJA TUTORIAL</a><br>
    <input type="text" v-bind:value="name">
    <p v-html="webtag">  </p>
    <p>
        <button v-on:click.once="age++">ADD</button>
        <button v-on:click="age--">SUBTRACT</button><br>
        <button v-on:click="doDouble">x2</button>
        <button v-on:dblclick="addTen">+10</button><br>

        {{age}}
    </p>


    <div id="canvas" >{{x}}.{{y}}

    </div>

    <a href="http://www.youtube.com" target="_blank" v-on:click.prevent="click">youtube</a>
    <p>
        https://vuejs.org/v2/guide/events.html#Event-Modifiers
    </p>

    <label>name</label>
    <input type="text" v-on:keyup="logName" >

    <br>
    <input type="text"  v-model="name">
<p><b>Computed props</b></p>

<p>age + a = {{addToA}}

    <br> computed : addToA , fx : addToA()
</p>

    <div v-bind:class="{someclass : vue_value, red:!vue_value}">

        <button v-on:click="changeClass()">change</button>
    </div>

    <div><b>Conditional , v-if v-else v-else-if removes element from dom , v-show changes display</b>

        <div v-if="vue_value">Vue Value True</div>
        <div v-else-if="!vue_value">Vue Value FALSE</div>

    </div>


    <div><b>V-for</b><br>

        <div style="width: 200px">
    <ul class="w3-ul w3-hoverable">
        <li v-for="character in characters">{{character}}</li>
    </ul>
        </div>
        <hr>
        <div style="width: 200px">
            <ul class="w3-ul w3-hoverable">
                <li v-for="(ninja,index) in ninjas"> {{index}}. {{ninja.name}} - {{ninja.age}}</li>
            </ul>
        </div>
        <hr>

        <template v-for="ninja in ninjas">
            <div v-for="(val,key) in ninja"><b>{{key}} : {{val}}</b></div>

        </template>

    </div>

</div>


<script src="<?=base_url('/js/vue_instance.js')?>"></script>

</body>
<script>


</script>
<style>

#canvas{
    width:200px;
    height: 50px;
    text-align: center;
    border: 1px solid #333;
}
    .someclass{
        background: green;
        width: 100px;
    }
    .red{
        background: red;
        width: 200px;
    }
</style>
</html>