//const bus = new Vue();
Vue.prototype.$eventBus = new Vue();


new Vue({

    el: "#vue-app",

    components: {
        'Basic': httpVueLoader('../components/basic.vue'),
        'my-component': httpVueLoader('../components/my-component.vue'),
        'lifecycle': httpVueLoader('../components/lifecycle.vue')
    },

    data: {
        msg: "vue-one",
        selected  : "my-component"
    },

    methods: {

        login:function () {
           // this.$eventBus.$emit('logged-in');
        },
        changeComponent:function () {
            this.selected = (this.selected == 'my-component') ? 'lifecycle': 'my-component';
        }
    },
    /////lifecyclehooks
    beforeCreate(){
        //alert("1");
    },
    created(){
        //alert("2");
    },
    beforeMount(){
        //alert("3");
    },
    mounted(){
        //alert("4");
    }
    ,
    beforeUpdate(){
        //alert("5");
    }
    ,
    updated(){
        //alert("6");
    }


});