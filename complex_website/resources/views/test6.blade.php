<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        window.addEventListener("scroll", function(event) {
            var top = this.scrollY;
            var left =this.scrollX;

            horizontalScroll.innerHTML = "Scroll X: " + left + "px";
            verticalScroll.innerHTML = "Scroll Y: " + top + "px";
        }, false);

        function changes() {

            return window.pageYOffset;
        }
        let value = changes();
        document.getElementById("demo").innerHTML = value;
    </script>
    @include('bootstraps.css')
</head>
<body>

    <p id="demo"></p>

    <div class="" style="height: 500px;">
        <div class="horizontalScroll">Scroll (x,y) to </div>
        <div class="verticalScroll">see me in action</div>
    </div>

    <script>
        window.addEventListener("scroll", function(event) {

        var top = this.scrollY;
        var left = this.scrollX;

        var horizontalScroll = document.querySelector(".horizontalScroll");
        var verticalScroll = document.querySelector(".verticalScroll");

        horizontalScroll.innerHTML = "Scroll X: " + left + "px";
        verticalScroll.innerHTML = "Scroll Y: " + top + "px";
        // else
        //     alert("y less than 50px");
        if(top > 50 ){
            var element = document.querySelector("#myDiv");
            element.classList.replace("btn-primary", "btn-secondary");
        }
        if(top < 50 ) {
            element.classList.replace("btn-secondary", "btn-primary");
        }


        }, false);
    </script>
    <button class="btn btn-primary" id="myDiv">Change Color</button>

    <div class="" style="height: 500px;">
        <div class="horizontalScroll">Scroll (x,y) to </div>
        <div class="verticalScroll">see me in action</div>
    </div>

</body>
</html>