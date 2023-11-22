<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('bootstraps.css')
    <title>Test 5</title>
</head>
<body>
    <div class="bd-example">
        <div class="row">
          <div class="col-4">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
          </div>
          <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h4 id="list-item-1">Item 1</h4>
              <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
              <h4 id="list-item-2">Item 2</h4>
              <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
              <h4 id="list-item-3">Item 3</h4>
              <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
              <h4 id="list-item-4">Item 4</h4>
              <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
            </div>
          </div>
        </div>
      </div>

    @include('bootstraps.js')
</body>
</html>