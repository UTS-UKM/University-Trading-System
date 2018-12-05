
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
                          @forelse($products->sortBy('created_at') as $product)
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="slider-item">
                                            <div class="slider-image">


                           

                            <img class="img-responsive" src="{{ asset('images/' . $product->id . '_1') }}" alt="{{$product->product_pic_1}}">
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
                              <div class="col-md-6 col-sm-12 col-xs-6" style="margin-right:5px;">
                                  <a href="/product/{{$product->id}}" class="ViewProduct btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Product</a>
                              </div>
                            <div name="favouriteFunction" style="margin-right:10px;">
                              
@include('inc.FavFunction')
                            </div>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>

                          @empty

        <h3 style="margin-left:100px;">No products</h3>

        

    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    

        <div class="row"style="margin-top:30px;">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>Most Viewed Products</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        

                <div class="row" >

                    <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
                
                        <div class="carousel-inner">
                          @forelse($products->sortByDesc('clicks') as $product)
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="slider-item">
                                            <div class="slider-image">


                           

                            <img class="img-responsive" src="{{ asset('images/' . $product->id . '_1') }}" alt="{{$product->product_pic_1}}">
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
                              <div class="col-md-6 col-sm-12 col-xs-6" style="margin-right:5px;">
                                  <a href="/product/{{$product->id}}" class="ViewProduct btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Product</a>
                              </div>
                            <div name="favouriteFunction" style="margin-right:10px;">
                              
@include('inc.FavFunction')
                            </div>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>

                          @empty

        <h3 style="margin-left:100px;">No products</h3>

        

    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                        
                    





                </div>




                        <div class="row"style="margin-top:30px;">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>Most Favourited Products</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        

                <div class="row" >

                    <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
                
                        <div class="carousel-inner">
                          @forelse($products->sortByDesc('favourited') as $product)
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="slider-item">
                                            <div class="slider-image">

                           

                            <img class="img-responsive" src="{{ asset('images/' . $product->id . '_1') }}" alt="{{$product->product_pic_1}}">
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
                              <div class="col-md-6 col-sm-12 col-xs-6" style="margin-right:5px;">
                                  <a href="/product/{{$product->id}}" class="ViewProduct btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Product</a>
                              </div>
                            <div name="favouriteFunction" style="margin-right:10px;">
                              
@include('inc.FavFunction')
                            </div>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>

                          @empty

        <h3 style="margin-left:100px;">No products</h3>

        

    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                        
                    





                </div>