@extends('layouts.app')

    @section('content')

      

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
                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Swap</a>
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