<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    @include('bootstraps.css')
</head>
<body>

    <div id="list-example" class="navbar">
        <a class="list-group-item list-group-item-action" href="#list-item-1" style="width: 500px">
            text text text.
        </a>test
    </div>

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <p class="fs-5 container bg-light" id="list-item-1" style="width: 300px"> text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
    </div>

    <div id="list-example" class="navbar">
        <a class="list-group-item list-group-item-action" href="#list-item-2" style="width: 500px">
            text text text.
        </a>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <p class="fs-5 container bg-light" id="list-item-2" style="width: 300px"> text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
    </div>

    <div id="list-example" class="navbar">
        <a class="list-group-item list-group-item-action" href="#list-item-3" style="width: 500px">
            text text text.
        </a>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <p class="fs-5 container bg-light" id="list-item-3" style="width: 300px"> text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
    </div>

    <div id="list-example" class="navbar">
        <a class="list-group-item list-group-item-action" href="#list-item-4" style="width: 500px">
            text text text.
        </a>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <p class="fs-5 container bg-light" id="list-item-4" style="width: 300px"> text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
    </div>

    <div id="list-example" class="navbar">
        <a class="list-group-item list-group-item-action" href="#list-item-5" style="width: 500px">
            text text text.
        </a>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <p class="fs-5 container bg-light" id="list-item-5" style="width: 300px"> text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
    </div>

    @include('bootstraps.js')
</body>
</html>