var data ={
    name:'ulaş'
}

Vue.component('greeting',{
   template:"<p>reusable component {{name}} <button v-on:click='changeName'>ChangeName</button> </p><br>" ,
    data:function(){
      /* return {
           name:'ulaş'
       }*/

      return data; ///for multiple objs use another data obj.
    },
    methods:{
        changeName:function () {
            this.name = 'dovakiin';
        }
    }
});

var one = new Vue({

    el: "#vue-app-one",

    components: {
        'Ulascomponent': httpVueLoader('../components/ulascomponent.vue')
    },

    data: {
        title: "vue-one"
    }

});

var two = new Vue({

    el: "#vue-app-two",
    data: {
        title:"vue-two"
    },
    methods:{
        changeTitle:function(){
            one.title = "changed";
        },
        readRefs:function () {
            alert( JSON.stringify(this.$refs));
           // alert(this.$refs.input1.value); //innertext

        }
    }

});