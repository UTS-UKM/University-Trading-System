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
        
   
   
        
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        
        </body>
        </html> 
        <div class="col-sm-9 padding-right">
            <div class="col-lg-4">
                <div class="carousel-inner">
                    <div class="item active">
                    <img class="rounded float-left"  src="{{ asset('images/' . $productDetails->product_pic_1) }}" alt="{{$productDetails->product_pic_1}}" >
                
                     </div>
                 
                </div>
            </div>


            <div class="product-information"><!--/product-information-->
                <div class="col-lg-3">
                        <h2>{{$productDetails->product_name}}</h2>
                        <p>ID: {{$productDetails->id}}</p>
                        <img src="images/product-details/rating.png" alt="" />
                         <span>
                                <span>RM{{$productDetails->product_price}}</span>
                                <br>
                                <button type="button" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                SWAP
                                </button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                        <a href="test"><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                </div>

            <!--/product-information-->
                </div>
                </div>
             </div><!--/product-details-->
                <div class="category-tab shop-details-tab"><!--category-tab-->
                 <div class="row">
                        <div class="col-sm-12">
                         <ul class="nav nav-tabs">
                             <li class="active"><a href="#details" data-toggle="tab">Description</a></li>
                    
                        </ul>
                     </div>
                    </div>
             </div>
             <div class="tab-content">
                        <div class="tab-pane active in" id="details" >
                        <div class ="col-lg-12">
                            <p>{{$productDetails->product_description}}</p>
                     </div>
                
                     </div>
             </div>
</div>

    
                
                

          
@endsection
 
