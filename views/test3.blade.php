<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>C-Test 3</title>

        @include('bootstraps.css')
        {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> --}}



        <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>


        <!-- Custom styles for this template -->
        {{-- <link href="carousel.css" rel="stylesheet"> --}}
      </head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="product">Product</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="about-us">About Us</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <main>
        {{-- <post-header> --}}
        <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel" style="top: -25px; bottom: 0;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <image href="{{url('images/backgroundHeader.jpg')}}" width="100%" height="100%" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Introlude</h1>
                            <h3>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</h3>
                            <p><a class="btn btn-lg btn-secondary" href="product">Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </post-header> --}}


        <!-- START THE FEATURETTES -->
        <div class="container marketing">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        {{-- <rect width="100%" height="100%" fill="#eee"></rect> --}}
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        <rect width="100%" height="100%" fill="#777"></rect>
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500"/>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        {{-- <rect width="100%" height="100%" fill="#eee"></rect> --}}
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

        </div>

        @include('footer')
    </main>

    @include('bootstraps.js')
</body>
</html>
