<template>
    <div class="container">
        <div class="row">
         <product-card-component  v-for="product in products" :product="product"></product-card-component>
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>
