<template>
    <div>
        {{title}}

        <button v-on:click="changeTitle()">Change Title</button>
        <hr>
        <slot name="one"></slot>
        <hr>
        <slot name="two"></slot>
    </div>
</template>

<script>

    module.exports = {

        props:{

        },
        data:function(){
            return  {

                title : 'basic vue',
                //ninjas : ['yoshimatu','hiratoshi','matsomio','numo']
            }
        },
        methods:{
            getCurrentUser:function () {
                alert("loggedinuser");
            }
            ,
            changeTitle:function () {
               // this.$emit('changeTitle','XXXX');
                this.title = Math.round(Math.random()*1000000);
                this.$eventBus.$emit('titleChanged',this.title);
            }
        },
        created() {
            //this.$eventBus.$on('logged-in', this.getCurrentUser);
        },


    }

</script>

<style>


</style>