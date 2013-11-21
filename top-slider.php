<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ResponsiveSlides.js &middot; Alternative themes</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="top-slider/css/responsiveslides.css">
  <link rel="stylesheet" href="top-slider/css/top-slider.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="top-slider/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      //$("#slider1").responsiveSlides({
//        auto: false,
//        pager: true,
//        nav: true,
//        speed: 500,
//        maxwidth: 800,
//        namespace: "centered-btns"
//      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 510,
        namespace: "transparent-btns"
      });

      // Slideshow 3
      //$("#slider3").responsiveSlides({
//        auto: false,
//        pager: false,
//        nav: true,
//        speed: 500,
//        maxwidth: 800,
//        namespace: "large-btns"
//      });

    });
  </script>
</head>
<body>
  <!--<div id="wrapper">-->
    <!--<h1>Three different ways to use next/prev buttons</h1>



    <h3>Vertically centered on both sides</h3>-->
    <!-- Slideshow 1 -->
    <!--<div class="rslides_container">
      <ul class="rslides" id="slider1">
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/1.jpg" alt=""></li>
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/2.jpg" alt=""></li>
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/3.jpg" alt=""></li>
      </ul>
    </div>



    <h3>Transparent buttons over the left and right side</h3>-->
    <!-- Slideshow 2 -->
    <div class="rslides_container">
      <ul class="rslides" id="slider2">
        <li><img src="top-slider/images/01.jpg" alt=""></li>
        <li><img src="top-slider/images/02.jpg" alt=""></li>
        <li><img src="top-slider/images/03.jpg" alt=""></li>
        <li><img src="top-slider/images/04.jpg" alt=""></li>
        <li><img src="top-slider/images/05.jpg" alt=""></li>
      </ul>
    </div>



    <!--<h3>100% height with vertically centered icons</h3>-->
    <!-- Slideshow 3 -->
    <!--<div class="rslides_container">
      <ul class="rslides" id="slider3">
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/1.jpg" alt=""></li>
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/2.jpg" alt=""></li>
        <li><img src="file:///D|/slider/viljamis-ResponsiveSlides.js-v1.54-2-g1200795/viljamis-ResponsiveSlides.js-1200795/demo/images/3.jpg" alt=""></li>
      </ul>
    </div>



    <a href="http://responsiveslides.com/">View ResponsiveSlides.js documentation</a>-->
  <!--</div>-->
</body>
</html>
