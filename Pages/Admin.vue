<!--
-->
<script>
    export default {
        data() {
            return {
                ref: null,
            }
        },
        methods: {
            goProduct() {
                this.$refs.targetProduct.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };
</script>

<script setup>

</script>

<template>
    <div class="passHeader">
        <div class="card border border-secondary mx-2 pt-4" id="header">
            <!-- model 3 -->
            <!-- <div class="container card-body my-3 position-relative">
                <button class="btn btn-outline-secondary position-absolute top-0 start-0 translate-middle px-5">Product</button>
                <button class="btn btn-outline-secondary position-absolute top-0 start-50 translate-middle px-5">Views</button>
                <button class="btn btn-outline-secondary position-absolute top-0 start-100 translate-middle px-5">Contact</button>
            </div> -->

            <!-- model 2 -->
            <div class="container card-body row-cols-3 my-3"> <!-- add mt-2 -->
                <button class="btn btn-outline-secondary" @click="goProduct">Product</button>
                <button class="btn btn-outline-secondary">Views</button>
                <button class="btn btn-outline-secondary">Contact</button>
            </div>

            <!-- model 1 -->
            <!-- <div class="container card-body my-3">
                <button class="btn btn-outline-secondary mx-5">Product</button>
                <button class="btn btn-outline-secondary mx-5">Views</button>
                <button class="btn btn-outline-secondary mx-5">Contact</button>
            </div> -->
        </div>
    </div>


    <div id="product"  ref="targetProduct">
        <h3>Here For Product Content</h3>
    </div>

</template>

<style scoped>
    #product {
        min-height: 100vh;
    }
    .passHeader{
        /* min-height: 100vh; */
    }
    #header {
        top: -3rem
    }
</style>