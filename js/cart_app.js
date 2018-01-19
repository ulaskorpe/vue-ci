window.addEventListener('load',function () {
    window.vue =  new Vue({
        el: '#app2',
        data: {
            isLoading :true,
            message:"msg2",
            cart: [],
            saved : []


        }
        ,
        methods:{
            removeFromCart(index){
             // alert(index);
                if(confirm("silinecek ? ")){
              const item =  this.cart.splice(index,1);
              this.saved.push(item[0]);
                }
          },
            removeFromSaved(index){
                const item =this.saved.splice(index,1);
                this.cart.push(item[0]);
            }

        },


        computed:{
            cartTotal(){
                let total =0;
                this.cart.forEach((item)=>{
                    total +=parseFloat(item.price,10);
                })
                return total.toFixed(2);
            },
            savedTotal(){
                let total =0;
                this.saved.forEach((item)=>{
                    total +=parseFloat(item.price,10);
                 })
                return total.toFixed(2);
            }
        },

        created() {

            setTimeout(()=>{
                fetch('http://codeigniter-mod.test/data/data.json')
        .then((res) => {return res.json() })
        .then((res) => {

                console.log(res)
            this.isLoading = false;
             this.cart = res.cart ;
             this.saved = res.saved;


                //console.log(res);
             })

            },1000)

            //console.log("///bok");

        }
    })
});
