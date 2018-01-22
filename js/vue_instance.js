new Vue({

   el:"#vue-app",
    data :{
       name: 'ulaşkörpe',
        website : 'https://www.youtube.com/watch?v=xIOwFTCBBDg&index=4&list=PL4cUxeGkcC9gQcYgjhBoeQH7wiAyZNrYa',
        webtag :'<a href="https://www.youtube.com/watch?v=xIOwFTCBBDg&index=4&list=PL4cUxeGkcC9gQcYgjhBoeQH7wiAyZNrYa" target="_blank">SITE</a>'
    },
    methods : {

       greet:function(){
           return "hi"+this.name;
       }

    }


});