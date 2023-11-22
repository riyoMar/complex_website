<script>
// import Header from './Header.vue'
// import Footer from './Footer.vue'
export default {
    components: {
        // Footer,
        // Header
    }
}
</script>

<script setup>
import { Head } from '@inertiajs/vue3'

</script>

<template>
    <Head title="Home" />
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="images/Logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="product">Product</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="support">Support</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- <post-header> -->
        <div id="postHeader" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="images/backgroundHeader.jpg" width="100%" height="142%" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Introlude</h1>
                            <h3>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</h3>
                            <p><a class="btn btn-lg btn-primary" href="product">Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions</h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="images/productImage.jpg" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Product Introductions</h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <image xlink:href="images/productImage.jpg" width="735" height="500"/>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions</h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="images/productImage.jpg" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

        </div>


        <footer class= "container">
            <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
            <p class="text-start">© 2023–2024 Riyo & Calvin.</p>
        </footer>


    </main>
</template>

<style scoped>
    #postHeader {
        /* position: relative; */
        top: -50px;
    }

</style>