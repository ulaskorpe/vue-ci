<template>
    <div>
        <input type="text" value="">
       <img v-bind:src="imageLink"/>

    </div>
</template>

<script>

    module.exports = {

        props:{

        },
        data:function(){
            return  {
                imageLink :'http://codeigniter-mod.test/img/lifecycle.png'
            }
        },
        methods:{

        },
        created() {

        },


    }
</script>

<style>

</style>
