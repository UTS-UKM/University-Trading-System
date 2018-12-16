      <?php
      if(Auth::check()){
      $user_id = auth()->user()->id;
      }
      $product_id = $product->id;

      ?>
      <style>
        #heartbtn{
          color:red;
          border: none;
          background-color: transparent;
        }
      </style>
          @if (Auth::check()) 
                    @if(!$product->favouritedBy($product_id))
                         <span class="pull-right">
                          <form action="/favourite/addToFavourite/{{$product_id}}">
                            
                            <input id="user_id"name="user_id"type="hidden" value="{{Auth::user()->id}}">
                                @if ($errors->has('user_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif

                            <input name="favouritble_id"id="favouritble_id"type="hidden" value="{{$product->id}}">
                                @if ($errors->has('favouritble_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('favouritble_id') }}</strong>
                                    </span>
                                @endif

                            <input name="favouriteable_type"id="favouriteable_type"type="hidden" value="{{$product->category_id}}">
                                @if ($errors->has('favouriteable_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('favouriteable_type') }}</strong>
                                    </span>
                                @endif

                            <button type="submit" id="heartbtn"class="btn btn-primary"><i class="fa fa-heart"></i></button>
                          </form>
                        </span>
                    @endif
                        @endif