@extends('layouts.app')
@section('content')
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
          <div style="height:-webkit-fill-available" class="col-lg-3">
  
            <h1 class="my-4">Categories</h1>
            <div class="list-group">
              <a href="#" class="list-group-item">Electronic Devices</a>
              <a href="#" class="list-group-item">Electronic Accessories</a>
              <a href="#" class="list-group-item">TV & Home Appliances</a>
              <a href="#" class="list-group-item">Health & Beauty</a>
              <a href="#" class="list-group-item">Babies & Toys</a>
              <a href="#" class="list-group-item">Category 3</a>
              <a href="#" class="list-group-item">Category 1</a>
              <a href="#" class="list-group-item">Category 2</a>
              <a href="#" class="list-group-item">Category 3</a>
            </div>
            
          </div>
 <!-- 
                <div class="row" style="margin-left: 50px">
                    <div class="col-md-2">
                        <h3>
                            h3. Lorem ipsum dolor sit amet.
                        </h3>
                        <ul>
                            <li class="list-item">
                                Lorem ipsum dolor sit amet
                            </li>
                            <li class="list-item">
                                Consectetur adipiscing elit
                            </li>
                            <li class="list-item">
                                Integer molestie lorem at massa
                            </li>
                            <li class="list-item">
                                Facilisis in pretium nisl aliquet
                            </li>
                            <li class="list-item">
                                Nulla volutpat aliquam velit
                            </li>
                            <li class="list-item">
                                Faucibus porta lacus fringilla vel
                            </li>
                            <li class="list-item">
                                Aenean sit amet erat nunc
                            </li>
                            <li class="list-item">
                                Eget porttitor lorem
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                
                -->

                        <h1>
                           Hi {{Auth::user()->name}}
                        </h1>
                <div style=""class="card-body">
                   <?php $id=auth()->user()->id; 
                   ?> 
                    <form method="POST"style="margin-left:50px;margin-right:50px;" action="{{action('UsersController@update', $id)}}">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="{{Auth::user()->name }} " value="{{auth::user()->name}}" autofocus>
                         

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="user_contact" class="col-md-6 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="user_contact" type="text" class="form-control{{ $errors->has('user_contact') ? ' is-invalid' : '' }}" name="user_contact" placeholder="{{Auth::user()->user_contact }} " value="{{auth::user()->user_contact}}" autofocus>
                         

                                @if ($errors->has('user_contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_contact') }}</strong>
                                    </span>
                                @endif
                            </div>



                            <label style="margin-top:10px;"for="user_birthday" class="col-md-6 col-form-label text-md-right">{{ __('Birthdate') }}</label>
                            <div class="col-md-6">
                            <input class="form-control date" id="user_birthday" name="user_birthday" placeholder="YYYY-MM-DD" value="{{auth::user()->user_birthday}}" type="text"/>

                                @if ($errors->has('user_birthday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_birthday') }}</strong>
                                    </span>
                                @endif
                                <script type="text/javascript">
                                    $(function () {
                                        $('#user_birthday').datetimepicker();
                                    });
                                </script>
                              </div>


                            <label style="margin-top:10px;"for="user_address" class="col-md-6 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input style="height:100px;font-size:14pt;"id="user_address" type="text" class="form-control{{ $errors->has('user_address') ? ' is-invalid' : '' }}" name="user_address" placeholder="{{Auth::user()->user_address }} " value="{{auth::user()->user_address}}" autofocus>
                         

                                @if ($errors->has('user_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_address') }}</strong>
                                    </span>
                                @endif
                            </div>

{{--
                            <label style="margin-top:10px;"for="image" class="col-md-6 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="col-md-6">
                            <input name="image" class="col-md-6 col-form-label text-md-right" type="file">
                        </div>
--}}

                            <div style="margin-top:10px;"class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                    </form>
                </div>
             
           <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>

@endsection