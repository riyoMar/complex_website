<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    @include('bootstraps.css')
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
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="about-us">About Us</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <div class="container overflow-hidden" style="min-height: 100vh; display: block; text-align: center; padding-top: 70px;">

        <div class="row gy-5 row-cols-3" style="padding-bottom: 30px">
            <div class="col">
                <div class="position-relative" style="height: 455px;">
                    <div class="text-center" style="padding: 30px;">
                        <img src="{{url('/images/productImage.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                        <div class="p-3 border-0 bg-ligt fs-5">Product Name</div>
                            <figcaption class="figure-caption text-start fs-6 text-start fs-6">Short product describe Short product describe Short product describe Short product describe Short product describe Short product describe Short product.</figcaption>
                    </div>
                    <div class="bd-example position-absolute top-100 start-50 translate-middle">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="position-relative" style="height: 455px;">
                    <div class="text-center" style="padding: 30px">
                        <img src="{{url('/images/Logo.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                        <div class="p-3 border-0 bg-ligt fs-5">Product Name</div>
                            <figcaption class="figure-caption text-start fs-6">Short product describe Short product describe Short product describe Short product describe.</figcaption>
                    </div>
                    <div class="bd-example position-absolute top-100 start-50 translate-middle">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="position-relative" style="height: 455px;">
                    <div class="text-center" style="padding: 30px">
                        <img src="{{url('/images/productImage.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                        <div class="p-3 border-0 bg-ligt fs-5">Product Name</div>
                        <figcaption class="figure-caption text-start fs-6">Short product describe.</figcaption>
                    </div>
                    <div class="bd-example position-absolute top-100 start-50 translate-middle">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="position-relative" style="height: 455px;">
                    <div class="text-center" style="padding: 30px">
                        <img src="{{url('/images/productImage.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                        <div class="p-3 border-0 bg-ligt fs-5">Product Name</div>
                        <figcaption class="figure-caption text-start fs-6">Short product describe.</figcaption>
                    </div>
                    <div class="bd-example position-absolute top-100 start-50 translate-middle">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="position-relative" style="height: 455px;">
                    <div class="text-center" style="padding: 30px">
                        <img src="{{url('/images/productImage.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                        <div class="p-3 border-0 bg-ligt fs-5">Product Name</div>
                        <figcaption class="figure-caption text-start fs-6">Short product describe.</figcaption>
                    </div>
                    <div class="bd-example position-absolute top-100 start-50 translate-middle">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- pop up build --}}

    <div class="modal fade" id="view_details" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title h4" id="viewDetailsLabel">View Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
    @include('bootstraps.js')
</body>
</html>
