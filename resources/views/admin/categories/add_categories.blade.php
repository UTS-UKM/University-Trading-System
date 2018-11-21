@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
<title>University Trading Sytem</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<link href="font-awesome/{{ asset('fonts/backend_fonts/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>



<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>

@section('content')

    <!--Action boxes-->
    
            <div class="quick-actions_homepage">
              <ul class="quick-actions">
                <li class="bg_lo"> <a href="{{ url('admin/view-categories') }}"> <i class="icon-dashboard"></i>View Category </a> </li>
                <li class="bg_lo"> <a href="{{ url('admin/delete-categories') }}"> <i class="icon-dashboard"></i>Delete Category </a> </li>
                <li class="bg_lg"> <a href="charts.html"> <i class="icon-signal"></i> Products</a> </li>
                <li class="bg_lb"> <a href="tables.html"> <i class="icon-th"></i> Users</a> </li>
                <li class="bg_ly span3"> <a href="{{ url('admin/') }}"> <i class="icon-th"></i>Admin Dashboard</a> </li>
              </ul>
            </div>
    
        <!--End-Action boxes-->  


        <div style="height:-webkit-fill-available" class="col-md-12">
  
           <center> <h1 class="my-4">Add Category</h1></center>
           
    <div style=""class="card-body">
       <?php $id=auth()->user()->id; 
       ?> 
        <form method="POST"style="margin-left:50px;margin-right:50px;" action="{{action('CategoriesController@update', $id)}}">
            @csrf


            <div class="form-group row">
                <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="{{Auth::user()->name }} " value="{{auth::user()->name}}" autofocus>
             

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>



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