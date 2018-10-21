@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row">
  
          <div class="col-lg-3">
  
            <h1 class="my-4">Categories</h1>
        
            <div class="list-group">
              <a href="#" class="list-group-item">Electronic Devices</a>
              <a href="#" class="list-group-item">Electronic Accessories</a>
              <a href="#" class="list-group-item">TV & Home Appliances</a>
              <a href="#" class="list-group-item">Health & Beauty</a>
              <a href="#" class="list-group-item">Babies & Toys</a>
              <a href="#" class="list-group-item">Groceries & Pets</a>
              <a href="#" class="list-group-item">Home & Lifestyle</a>
              <a href="#" class="list-group-item">Women's Fashion</a>
              <a href="#" class="list-group-item">Men's Fashion</a>
              <a href="#" class="list-group-item">Automotive & Motorcycles</a>
              <a href="#" class="list-group-item">Fashion Accessories</a>
              <a href="#" class="list-group-item">Sports & Travel</a>
            </div>
            
  
          </div>
           <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<br>
        <br>
        <br>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img { float:top; }
        
        
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 850px;
          max-height: 450px;
          position: relative;
          float:right;
          margin: 1ch; 
        
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        </style>
        </head>
        <body>
        
   
   
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
        
        </body>
        </html> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php for($i = 1; $i <= 6; $i++) { ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="/images/no-image.jpg" alt="" style="width: 100%;"></a>
                        <div class="favs-div">
                          <input type="checkbox" id="checkbox<?php echo $i; ?>" />
                          <label for="checkbox<?php echo $i; ?>">
                            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                              <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>

                                <g id="grp7" opacity="0" transform="translate(7 6)">
                                  <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                  <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                                </g>

                                <g id="grp6" opacity="0" transform="translate(0 28)">
                                  <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                  <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                                </g>

                                <g id="grp3" opacity="0" transform="translate(52 28)">
                                  <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                  <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                                </g>

                                <g id="grp2" opacity="0" transform="translate(44 6)">
                                  <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                  <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                                </g>

                                <g id="grp5" opacity="0" transform="translate(14 50)">
                                  <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                  <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                                </g>

                                <g id="grp4" opacity="0" transform="translate(35 50)">
                                  <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                  <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                                </g>

                                <g id="grp1" opacity="0" transform="translate(24)">
                                  <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                  <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                                </g>
                              </g>
                            </svg>
                          </label>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="#">Item One</a>
                          </h4>
                          <h5>$24.99</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                      </div>
                    </div>
                  <?php } ?>


          
@endsection
 