<template>
    <div id="show-blogs" v-theme="'wide'">
        <h1>show blogs</h1>

        <input type="text" v-model="search" placeholder="search blogs">
            <div v-for="blog in filteredBlogs">
                <b v-rainbow>{{blog.title | uppercase}}  </b>
                <p class="p1">{{blog.body }}</p>
            </div>
    </div>

    <div class="c1">

    </div>

</template>

<script>


    module.exports = {



        data: function() {
            return {
                blogs :[],
                search : ""
            }
        },
        directives: {
            rainbow: {
                // directive definition
                bind(el,binding,vnode){
                    el.style.color = "#"+Math.random().toString().slice(2,8);
                },

                theme:{
                    bind(el,binding,vnode){
                        if(binding.value == 'wide'){
                             el.style.maxWidth = "1200px";
                          //  el.style.color = '#ff0000';
                        }else{
                            el.style.maxWidth = "100px";
                        }
                    }
                }
            }
        },
        computed:{
          filteredBlogs:function(){
              return this.blogs.filter((blog)=>{
                  //return (blog.title.match(this.search) || blog.body.match(this.search));
                  return blog.title.match(this.search);
              })
          }
        },
        filters:{
           uppercase:function (value) {
               return value.toUpperCase().substr(0,25);
           }

           },

        created(){
            // this.$http.get('http://codeigniter-mod.test/welcome/get_blogs').then(function (data) {
             this.$http.get('https://jsonplaceholder.typicode.com/posts').then(function (data) {
               this.blogs=data.body.slice(0,13);
                // this.blogs= data.body.slice(0,10);
             })
        }
    }
</script>

<style scoped>
.p1{
    color: #ccc;
}
</style>