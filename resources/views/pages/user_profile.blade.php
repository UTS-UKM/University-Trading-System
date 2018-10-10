@extends('layouts.app')
@section('content')
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="margin:50px;margin-left: 300px;"class="container-fluid">
                  

                </div>

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
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
             
                    </div>
            </div>
        </div>
       </div> 
           <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>

@endsection