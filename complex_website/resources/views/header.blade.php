<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            {{-- <a href="/" class="navbar-brand">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a> --}}
            {{-- <img src="{{url('/images/Logo.jpg')}}" alt="Image" width="40" height="32"/>
            <a class="navbar-brand" href="#">Coffee Shop</a> --}}
            <a class="navbar-brand" href="/">
                <img src="{{url('/images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Coffee Shop
            </a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <ul class="nav justify-content-end" id="navbarCollapse">
            {{-- test  --}}
            {{-- <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" id="navbarCollapse"> --}}
            {{-- test  --}}
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
