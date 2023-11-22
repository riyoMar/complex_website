<script>
    export default {

    }
</script>

<script setup>
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title= "Product" />
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="images/Logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="support">Support</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>
</template>

<style scoped>

</style>