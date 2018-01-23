<template>
    <div class="hello">{{title}}</div>
</template>

<script>
    module.exports = {
        data: function() {
            return {
                title: 'xaadds'
            }
        },
        created(){
            this.$eventBus.$on('titleChanged',(data)=>{

               this.title = data;
            });
        }
    }
</script>

<style>
    .hello {
        background-color: #ffe;
    }
</style>