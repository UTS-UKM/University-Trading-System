@extends('layouts.app')

@section('content')
    
<div class="container">

        <div class="row">
  
          <div class="col-lg-3">
  
            <h1 class="my-4">Categories</h1>
        
            <div class="list-group">
              <a href="/category1" class="list-group-item">Electronic Devices</a>
              <a href="/category2" class="list-group-item">Electronic Accessories</a>
              <a href="/category3" class="list-group-item">TV & Home Appliances</a>
              <a href="/category4" class="list-group-item">Health & Beauty</a>
              <a href="/category5" class="list-group-item">Babies & Toys</a>
              <a href="/category6" class="list-group-item">Groceries & Pets</a>
              <a href="/category7" class="list-group-item">Home & Lifestyle</a>
              <a href="/category8" class="list-group-item">Women's Fashion</a>
              <a href="/category9" class="list-group-item">Men's Fashion</a>
              <a href="/category10" class="list-group-item">Automotive & Motorcycles</a>
              <a href="/category11" class="list-group-item">Fashion Accessories</a>
              <a href="/category12" class="list-group-item">Sports & Travel</a>
            </div>
            
  
          </div>
           <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<br>
        <br>
        <br>
    
   
        <div class="slideshow-container">
        
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="https://placeimg.com/870/400/arch" style="width:100%">
          <div class="text">Caption Text</div>
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="https://placeimg.com/870/400/nature" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="https://placeimg.com/870/400/tech" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    
                
         @include('inc.productSlider')


                
                
                <div class="footer">
                  <p>UNIVERSITY TRADING SYSTEMS</p>
                </div>


        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>


    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/>
    <script src="{{url('assets/js/components/bootstrap.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '69b66d1b-874c-4679-8011-94cc14b4d349', f: true }); done = true; } }; })();</script>
                </html> 
                

          
@endsection
