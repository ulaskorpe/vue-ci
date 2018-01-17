window.addEventListener('load',function () {
    window.vue =  new Vue({
        el: '#app2',
        data: {
            isLoading :true,
            message:"msg2"


        }
        ,
        created() {

            setTimeout(()=>{
                fetch('http://codeigniter.test/data.json')
        .then((res) => {return res.json() })
        .then((res) => {

                console.log(res)
            this.isLoading = false;
             })

            },1000)

            //console.log("///bok");

        }
    })
});
