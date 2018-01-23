<template>
<div>
    <h1>ULAŞ COMPONENT</h1>
    <p v-on:click="somefx()">{{msg}}</p>


    <div class="d2">

        {{ninjas}}
        <hr>
        {{msg}}
    </div>

    <Ninja v-bind:ninjas="ninjas" v-bind:msg="msg" v-on:msgemit="updateTitle($event)"></Ninja>

    <hr>
    <input type="text" v-model="msg">

    <button v-on:click="msgChange();">MAIN CHANGE</button>
</div>
</template>

<script>

    module.exports = {

        data:function(){
            return  {
                query:'',
                msg : 'SOME MESSAGE',
                ninjas:[
                    {name:'Ryu',speciality:'Html',show:false},
                    {name:'Chun-li',speciality:'css',show:false},
                    {name:'Ken',speciality:'PHP',show:false},
                    {name:'Blanka',speciality:'JS',show:false}
                ]
            }
        },

        components: {
            'Ninja': httpVueLoader('../components/ninja.vue')
        },

        methods:{

            somefx:function(){
                this.msg = "heeey coo"+ Math.round(Math.random(1,5000)*1000);
            },

            handleSearch(){
                //alert(this.query);///// kucuk harfle yazmassa kabul etmiyor!!!!
               // this.$emit('searchrequested',this.query);
            },
            updateTitle:function (newTitle) {
                    //alert(newTitle);
                this.msg = newTitle;
            }
            ,
            msgChange:function ( ) {
                //alert(newTitle);
                this.msg = Math.random()*10000;
            }
        }

    }

</script>

<style scoped>
   h1{
       color:red;
   }
    .d2 {
        border: 1px solid #ccc;
    }

</style>