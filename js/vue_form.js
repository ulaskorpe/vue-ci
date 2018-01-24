
Vue.use(VueResource);

////custom directives



////custom directives

new Vue({

    el: "#vue-app",
    data:{

        blog:{
            title :"",
            content:"",
            categories:[],
            author:""

        }
        ,
        authors :['stephen king','clive barker','HP Lovecraft'],
        submitted:false,
        postData:""
    },
    components: {
        'showblogs': httpVueLoader('../components/showBlogs.vue')

    },


    methods:{ //$('#formToSend').serializeArray()
        submitFunction:function () {
            ///https://jsonplaceholder.typicode.com/posts
                //this.$http.post('http://codeigniter-mod.test/welcome/post_form',{
                this.$http.post('http://codeigniter-mod.test/welcome/post_form', {

                    title:this.blog.title,
                    content:this.blog.content,
                    categories:this.blog.categories,
                    author:this.blog.author

                }


                ).then(function(data){
                    this.submitted=true;
                    this.postData=data.statusText;
                    //alert(JSON.stringify(data));
                });
        }
    }


});



