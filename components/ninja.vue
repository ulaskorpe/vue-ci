<template>

    <div>

        <button v-on:click="fx()">fx</button>
        <h1>INNER COMPONENT : {{title}}</h1>
        <ul class="w3-ul w3-hoverable">
            <li v-for="character in ninjas">{{character}}</li>
        </ul>

        <button v-on:click="deleteNinja()">delete</button>
        <button v-on:click="msgfx()">msg</button>
        <button v-on:click="msgemit()">msg-emit</button>

        <hr>
        {{msg}}
    </div>
</template>


<script>

    module.exports = {
     //   props:['ninjas'],
        props:{
            ninjas:{
                type:Array,
                required : true
            },
            msg:{
                type:String
            }
        },
        data:function(){
            return  {

                title : 'NINJA',
                //ninjas : ['yoshimatu','hiratoshi','matsomio','numo']
            }
        },
        methods:{
            fx:function () {
                   /// alert(JSON.stringify(this.ninjas));
            }
            ,
            deleteNinja:function () {
                    this.ninjas.pop();
            }
            ,
            msgfx:function () {
                this.msg="abc";
            },
            msgemit:function () {
                this.$emit('msgemit',Math.random(100,50000));
            }
        }

    }

</script>

<style scoped>
    h1{
        color:blue;
    }

</style>