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
        <?php 
        ?>
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

                          @if (Auth::check())
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">send request to buyer</button>
                          @endif
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

                          @if (Auth::check())

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
                          <?php
                          $user_id=Auth::user()->id;
                          ?>


{{--            {!! Form::open(['route' => array('/product/sendswappingrequest'), 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!} --}}
                          

              <form method="POST"style="margin-left:50px;margin-right:50px;" action="/product/sendswappingrequest">
                        @csrf
                           

            <?php 


            ?>
            {{--
            <div class="form-group">
                    {{ Form::label('name', 'Categories') }}
                    {{ Form::select('name', productName, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                </div>
                --}}
                      <div class="form-group">

                          <select class="form-control" id="ProductsList">

                              @forelse($productUser as $products)
                             <?php
                            $productUser = DB::table('products')->where('user_id', auth()->user()->id)->get();
                            $productName = $products->product_name; 
                             ?> 
                            <option>
                              {{$productName}}
                            </option>

                               @empty
                              <h3>No products</h3>

    @endforelse
                              <?php 
                            $offeredProduct = $products->id;
                            $wantedProduct = $productDetails->id;
                            $buyerID = auth()->user()->id;
                            $sellerID = $productDetails->user_id;
                            ?>
                <input type="hidden" id="product_id" name="product_id" value="{{$wantedProduct}}">
                <input type="hidden" id="offeredProduct_id" name="offeredProduct_id" value="{{$offeredProduct}}">
                <input type="hidden" id="buyer_id" name="buyer_id" value="{{$buyerID}}">
                <input type="hidden" id="seller_id" name="seller_id" value="{{$sellerID}}">





                            
                          </select>
                        </div>
                         <h4>Offered Item ID: <?php echo $offeredProduct ?></h4>
                            <h4>Wanted Item ID: <?php echo $wantedProduct ?></h4>
                            <h4>Buyer User ID: <?php echo $buyerID ?></h4>
                            <h4>Seller User ID: <?php echo $sellerID ?></h4>


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
            
                          @endif
                

          
@endsection
 
