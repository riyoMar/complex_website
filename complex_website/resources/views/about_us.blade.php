{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                document.getElementById("header").classList.replace("transparent", "bg-dark");
            } else {
                document.getElementById("header").classList.replace("bg-dark", "transparent");;
            }
        }
    </script>
    @include('bootstraps.css')
    <style>
        .bg-image {
            /* background: url('images/backgroundHeader.jpg'); */
            width: 100vw;
            height: 300px;
            background-repeat: no-repeat;
        }
    </style>
    <title>About Us</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top transparent" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="product">Product</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <main>
        {{-- post header / --}}
        <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel" style="top: -25px; bottom: 0;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="104%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="{{url('images/backgroundHeader.jpg')}}" width="100%" height="142%" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption position-absolute top-50 start-50 translate-middle" style="width: 600px;">
                            <h3 class= "display-2 fw-bold">Coffee Shop</h3>
                            <h4 class="display-6 fs-4">- ABOUT US -</h4>
                            <p class="display-6 fs-5">
                                Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us Describe us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- / post header --}}

        {{-- <hr class="featurette-divider"> --}}

        <section class="section-relative" id="setion_coffee-finder_9">
            <div class="container">
                <div class="content px-md-5" style="color: #000000;">
                    <div class="row">
                        <div class="col-md-5 order-1 order-md-0 d-flex align-self-center flex-column">
                            <h2 class="content-title title-not-big">COFFEE FINDER</h2>
                            <div class="content-body">
                                <p>Our coffee masters have distilled their years of tasting knowledge down to three simple questions to help you find a coffee you’re sure to love.</p>
                                <p><a href="#" target="_blank" id="get_started_113400"><b>Get Started</b></a></p>
                                <p><a href="#" target="_blank" id="browse_all_coffees_183400"><b>Browse All Coffees</b></a><br><br></p>
                            </div>
                        </div>
                        <div class="col-md-5 order-0 order-md-1 offset-md-2 d-flex align-self-center flex-column">
                            <div class="content-body">
                                <p><img width="510" height="394" src="images/Logo.jpg"><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <svg class="bg-image" width= "100vw" height= "300px">
            <image xlink:href="{{url('images/backgroundHeader.jpg')}}" width= "100%" height="300px" />
        </svg>

        {{-- <svg class="" width= "100vw" height= "300px" xlink:href="http://www.w3.org/2000/svg"preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="{{url('images/backgroundHeader.jpg')}}" width= "100%" height="300px" />
        </svg> --}}

        {{-- <section class="section-relative" id="">
            <div class="container bg-image">
                <div class="content px-md-5">
                    <div class="row">
                        <div class="col-md-5 order-1 order-md-0 d-flex align-self-center flex-column">
                            <h2 class="content-title title-not-big">Our Coffee</h2>
                            <div class="content-body">
                                <p>Since 1971, it always has been and will always be about quality. We’re passionate about ethically sourcing only the finest Arabica coffee beans and roasting them with great care. Our passion for coffee is rivaled only by our love of sharing it.<br></p>
                                <a title="Explore More" style=" background-color: transparent; padding: 8px 18px; text-transform: uppercase; font-weight: 700; border-radius: 5px; border: solid 2px;font-style: normal;" href="/coffee/ethical-sourcing/coffee-quality" id="learn_more_1034012">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <div class="row featurette">
            <div class="col-md-7" style="width: 500px">
                <h2 class="featurette-heading">Product Introductions
                </h2>
                <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                    <image xlink:href="{{url('images/Logo.jpg')}}" width="500" height="500"/>
                </svg>
            </div>
        </div> --}}

        {{-- <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel" style="top: -25px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="104%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="{{url('images/backgroundHeader.jpg')}}" width="100%" height="142%" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Introlude</h1>
                            <h3>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>




    @include('footer')
    @include('bootstraps.js')
</body>
</html>