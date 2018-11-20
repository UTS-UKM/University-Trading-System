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

                <?php


                       class ProductLoopVariables{
                       private $product_id = 'default Value';

                         public function setVariables($product_id){
                           $this->product_id = $product_id;

                       }
                          public function getProductId(){
                            return $this->product_id;
                          }


                    }
               ?> 
                      


                @forelse($products as $product)
                <?php
                     $product_id = $product->id;

                     $ProductLoopVariables = new ProductLoopVariables();
                      $ProductLoopVariables->setVariables($product_id);
                  ?>
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                           
                            <div><img class="card-img-top" src="{{ asset('images/' . $product->product_pic_1) }}" alt="{{$product->product_pic_1}}" style="max-width: 80%;
                              max-height: 80%;"></div>
                            <div class="card-body">
                                <h4 class="card-title">
                          <h4>Item Name:{{$product->product_name}}</h4>
                          <h4>Price:RM {{$product->product_price}}</h4>
                          <h4>ID {{$product_id}}</h4>
                          <h4>Description:{{$product->product_description}}</h4>
                          @if (Auth::check())
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-serie-name="<?= $product_id ?>" data-target="#myModal">send request to buyer</button>
                          <a href="#mymodal" data-serie-name="<?= $product_id ?>"> test </a>
                          @endif

                        </div>
                        <div class="card-footer">
                          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                      </div>
                    </div>

                          

                          @empty

        <h3>No products</h3>

        

    @endforelse




               <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Send Swapping Request</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="sel1">Select A Product</label>
                          @if (Auth::check())
                          <?php
                          $user_id=Auth::user()->id;
                          ?>
                          @endif

                              @forelse($product->userProducts() as $products)

{{--            {!! Form::open(['route' => array('/product/sendswappingrequest'), 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!} --}}

              <form method="POST"style="margin-left:50px;margin-right:50px;" action="/product/sendswappingrequest">
                        @csrf

            <?php 
            $productName = $products->product_name; 
            $offeredProduct_id = $product_id;
            $wantedProduct_id = $ProductLoopVariables->getProductId();
            ?>
            {{--
            <div class="form-group">
                    {{ Form::label('name', 'Categories') }}
                    {{ Form::select('name', productName, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                </div>
                --}}
                      <div class="form-group">
                          <h4>ID: {{$product_id}}</h4>
                          <h4>OfferedProduct_id: {{$offeredProduct_id}}</h4>
                          <h4>wanterProductId: {{$wantedProduct_id}}</h4>

                          {{$product->product_name}}
                          <select class="form-control" id="ProductsList">
                            <option>
                              {{$productName}}
                            </option>




                               @empty
                              <h3>No products</h3>

                             @endforelse
                            
                          </select>
                        </div>

                <input type="hidden" id="product_id" name="product_id" value="">
            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}
                        </div>
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>

                {{-- END OF MODAL --}}
            
                </div>
               
                <!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .footer {
                   position:fixed ;
                   left: 0;
                   bottom: 0;
                   width: 100%;
                   background-color: Black;
                   color: white;
                   text-align: center;
                }
                </style>
                </head>
                <body>
                
                
                
                <div class="footer">
                  <p>UNIVERSITY TRADING SYSTEMS</p>
                </div>
                
                <script>
                  onclick="serieName=this.dataset.serieName;document.querySelector('#myModal input#product_id').value = serieName;return true;"
              </script>
                </body>
                </html> 
                

          
@endsection
 
