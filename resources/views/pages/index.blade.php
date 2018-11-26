@extends('layouts.app')

@section('content')
    
          <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/> 
          <script src="{{url('assets/js/components/bootstrap.js')}}"></script>
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
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        </head>
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

    .slider-item{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.slider-item .slider-image img{
    margin: 0;
    width: 100%;
}
.slider-item .slider-main-detail{
    padding: 10px;
    border-radius: 0 0 5px 5px;
}
.slider-item:hover .slider-main-detail{
    background-color: #dbeeee !important;
}
.slider-item .price{
    float: left;
    margin-top: 5px;
}
.slider-item .price h5{
    line-height: 20px;
    margin: 0;
}
.detail-price{
    color: #219FD1;
}
.slider-item .slider-main-detail .rating{
    color: #777;
}
.slider-item .rating{
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}
.slider-item .btn-add{
    width: 50%;
    float: left;
    border-right: 1px solid #E1E1E1;
}
.slider-item .btn-details{
    width: 50%;
    float: left;
}
.controls{
    margin-top: 20px;
}
.btn-info,.btn-info:visited,.btn-info:hover{
  background-color: #21BBD8;
  border-color: #21BBD8;
}
.btn-info{
  margin-left:5px;
}
.slider-main-detail:hover{
  background-color: #dbeeee !important;
}
.AddCart{
  margin: 0px;
  padding:5px;
  border-radius:2px;
  margin-right:10px;
}
.review {
  margin-bottom: 5px;
  padding-top:5px;
}

                .footer {
                   margin-top:50px;
                   position:fixed ;
                   left: 0;
                   bottom: 0;
                   width: 100%;
                   background-color: Black;
                   color: white;
                   text-align: center;
                }
        </style>
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
        
        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    

    <div class="container" style="margin-bottom:50px;">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>New Products</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        

                <div class="row">

                    <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                @forelse($products as $product)
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="slider-item">
                                            <div class="slider-image">
                           

                            <img class="img-responsive" src="{{ asset('images/' . $product->product_pic_1) }}" alt="{{$product->product_pic_1}}">
                              </div>
                              <div class="slider-main-detail">
                                  <div class="slider-detail">
                                      <div class="product-detail">
                          <h5>{{$product->product_name}}</h5>
                          <h5 class="detail-price">RM {{$product->product_price}}</h5>

                        </div>
                      </div>
                      <div class="cart-section">
                          <div class="row">
                              <div class="col-md-6 col-sm-12 col-xs-6 review">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-6">
                                  <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

                          @empty

        <h3>No products</h3>

        

    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                        
                    





                </div>
                
                
                
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
    
                
                </body>
                </html> 
                

          
@endsection
