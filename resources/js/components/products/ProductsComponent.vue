<template>
    <section>
        <transition-group tag="div" :css="false" name="aparecer" @before-enter="" @enter="" @leave="" class="row" >
          <product-card-component v-bind:product="product" v-for="product in products">
          </product-card-component>
        </transition-group>
    </section>
</template>

<script>
    export default {
        data(){
            return{
                name:'Products component',
                products:[
                ],
                endpoint: "/products"
            }
        },
        created() {
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios.get(this.endpoint).then((response)=>{
                   this.products=response.data.data;
                });
            },
            beforeEnter(el){
                el.style.opacity = 0;
                el.style.transform = "scale(0)";
                el.style.transition = "all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)"
            },
        }
    }
</script>
