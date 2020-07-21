<template>
    <div class="col-xs-12 col-sm-10 col-md-4">
        <div class="card">
            <div class="card-header"><h2 class="card-title">{{product.name}}</h2></div>
            <div class="card-body">
               <p class="card-text">{{product.description}}</p>
                <h3 class="card-subtitle">{{product.price}}</h3>
                <h4 class="card-subtitle">{{product.stock}}</h4>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
            product:{
                type: Object
            }
        }
    }
</script>

<style scoped>

</style>
