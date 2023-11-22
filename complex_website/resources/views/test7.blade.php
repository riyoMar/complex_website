<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 7</title>
    @include('bootstraps.css')
</head>
<body>

    <header>
        <div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar scroll</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>

    </header>

    <div class="container overflow-hidden" style="min-height: 100vh;; display: flex; flex-direction: column; text-align: center; padding-top: 70px;">
        <div class="row gy-5 row-cols-3 card-group" style="padding-bottom: 30px">
            @for ($i = 0; $i < 10; $i++)
                <div class="col">
                    <div class="position-relative">
                        <div class="text-center card-body" style="padding: 30px">
                            <img src="{{url('/images/productImage.jpg')}}" class="rounded" alt="" style="width: 275px; height: 250px;">
                            <div class="p-3 border-0 bg-ligt">
                                <p class="fw-bolder fs-5">Product Name</p>
                            </div>
                                {{-- <p class="fw-bold">Rp. {{ $i }},-</p> --}}
                        </div>
                        <div class="bd-example position-absolute top-100 start-50 translate-middle">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    @include('bootstraps.js')
</body>
</html>