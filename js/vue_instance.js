new Vue({

    el: "#vue-app",
    data: {
        name: 'ddddddd',
        website: 'https://www.youtube.com/watch?v=xIOwFTCBBDg&index=4&list=PL4cUxeGkcC9gQcYgjhBoeQH7wiAyZNrYa',
        webtag: '<a href="https://www.youtube.com/watch?v=xIOwFTCBBDg&index=4&list=PL4cUxeGkcC9gQcYgjhBoeQH7wiAyZNrYa" target="_blank">SITE</a>',
        age: 13,
        x: 0,
        y: 0,
        a:0,
        vue_value:true,
        characters:['ezio','dovakiin','maxpayne'],
        ninjas :[
            {name:'ryu',age:24},
            {name:'ken',age:28},
            {name:'blanka',age:50},
            {name:'chun-li',age:25}
        ]

        ,
        matches : [

        ]

    },
    methods: {

        getMatch:function (param,a,b,c){

                    $.get('/ulaskorpe/',function (data) {
                        this.matches = data ;
                    });

            },


        goster:function () {
           // alert( JSON.stringify(this.$refs));
            alert(this.$refs.input_1.value);

        },

        greet: function () {
            return "hi" + this.name;
        }
        ,
        doDouble:function() {

            this.age = this.age * 2;
        }
        , addTen:function() {
            this.age += 10;
        },
        updateMouse:function(event) {
            //console.log(event);
            // this.x =  event.screenX;
            // this.y =  event.screenY;

            this.x =  event.offsetX;
            this.y =  event.offsetY;
        }
        ,
        click:function(){
            alert("click");
        },
        logName:function(){
           this.name = "";

        },

        changeClass:function(){
            this.vue_value = (this.vue_value) ? false : true;
        }
        /*addToA:function(){
            return this.a+this.age;
        }*/
    },
    computed:{

        addToA:function(){
                    return this.a+this.age;
                },

        compClasses: function (){

        }
    }


});