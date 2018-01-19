<template>
    <div class="search">
    <input type="text" v-model="query" />
    <button v-on:click="handleSearch">SEARCH</button>
    </div>
</template>


<script>

    module.exports = {

        data(){
            return  {
                query:''
            }
        },
        methods:{

            handleSearch(){
                //alert(this.query);///// kucuk harfle yazmassa kabul etmiyor!!!!
                this.$emit('searchrequested',this.query);
            }
        }

    }

</script>

<style>
    .search input {
        padding: 5px 5px;
        border:1px solid #ccc;
    }

</style>