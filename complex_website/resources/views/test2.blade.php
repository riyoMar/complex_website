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
            background-repeat: no-repeat;
            background-image: url('images/backgroundHeader.jpg');
            background-size: 100vw 410px;
        }
    </style>
    <title>Test 2</title>
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

        <section class="section-relative" id="">
            <div class="container">
                <div class="content px-md-5" style="color: #000000;">
                    <div class="row">
                        <div class="col-md-5 order-1 order-md-0 d-flex align-self-center flex-column">
                            <h2 class="content-title title-not-big">Shop History/Describe/Awards</h2>
                            <div class="content-body">
                                <p>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</p>
                                {{-- <p><a href="#" target="_blank" id="get_started_113400"><b>Get Started</b></a></p> --}}
                                {{-- <p><a href="#" target="_blank" id="browse_all_coffees_183400"><b>Browse All Coffees</b></a><br><br></p> --}}
                            </div>
                        </div>
                        <div class="col-md-5 order-0 order-md-1 offset-md-2 d-flex align-self-center flex-column">
                            <div class="content-body">
                                <p><img width="510" height="394" src="images/productImage.jpg"><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-relative">
            <div class= "navbar bg-image" style= "height: 410px">
                <div class="container">
                    <div class="content px-md-5" style="color: #ffffff;">
                        <div class="row">
                                <div class="col-md-5 order-1 order-md-0 d-flex align-self-center flex-column">
                                    <h2 class="content-title title-not-big">COFFEE FINDER</h2>
                                    <div class="content-body">
                                        <p>Our coffee masters have distilled their years of tasting knowledge down to three simple questions to help you find a coffee you’re sure to love.</p>
                                        {{-- <p ><a style="color: #ffffff;" href="#" target="_blank" id="get_started_113400"><b>Get Started</b></a></p>
                                        <p><a style="color: #ffffff;" href="#" target="_blank" id="browse_all_coffees_183400"><b>Browse All Coffees</b></a><br><br></p> --}}
                                    </div>
                                </div>
                                {{-- <div class="container content-body">
                                        <p>Our coffee masters have distilled their years of tasting knowledge down to three simple questions to help you find a coffee you’re sure to love.</p>
                                        <p><a href="#" target="_blank" id="get_started_113400"><b>Get Started</b></a></p>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-relative pt-4" id="">
            <div class="container">
                <div class="content px-md-5" style="color: #000000;">
                    <div class="row">
                        <div class="col-md-5 order-1 order-md-0 d-flex align-self-center flex-column">
                            <div class="content-body">
                                <p><img width="510" height="394" src="images/productImage.jpg"><br></p>
                            </div>
                        </div>
                        <div class="col-md-5 order-0 order-md-1 offset-md-2 d-flex align-self-center flex-column">
                            <h2 class="content-title title-not-big" >Describe Packaging Product</h2>
                            <div class="content-body" style="min-width: 507px">
                                <p>Our coffee product is the best in the country, and going to internationa. Check our product details with click </p>
                                {{-- <p><a href="#" target="_blank" id="get_started_113400"><b>Get Started</b></a></p> --}}
                                {{-- <p><a href="#" target="_blank" id="browse_all_coffees_183400"><b>Browse All Coffees</b></a><br><br></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        {{-- <section>
            <div style="display: inline-block; align: center;vertical-align: middle;"  class="pt-4">
                <img src="images/productImage.jpg" style="width: 510px; height: 394px;">
              </div>
              <div style="display: inline-block; vertical-align: middle;">
                <div class="container text-end">
                    <h2>Packing Describe</h2>
                    <p>describe the packing</p>
                </div>
              </div>
        </section> --}}

        {{-- <section class="section-relative" id="">
            <div class="content pt-4"></div>
            <div class="container">
                <div class="text-start" style="display: inline-block; min-width: 0;">
                    <img width="510" height="394" src="images/productImage.jpg" style="min-width: 0;">
                </div>
                <div class="content" style="color: #000000;" style="min-width: 0;">
                    <div class="row">
                        <div class="col-md-5 order-0 ordfer-md-1 offset-md-7 d-flex align-self-center flex-column" >
                            <h2 class="content-title title-not-big">OUR RAREST COFFEES, ROASTED DAILY.</h2>
                            <div class="content-body">
                                <p>We travel the world in search of great coffee. In the process, we discover beans so special and rare that we can’t wait to bring them home and share. Each of these small-lot coffees has its own story to tell, and we meticulously develop a signature roast for every one of them.</p>
                                <p><a href="#" target="_blank" id="explore_starbucks_reserve__263400"><b>Explore Starbucks Reserve ®</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

    @include('footer')
    @include('bootstraps.js')
</body>
</html>