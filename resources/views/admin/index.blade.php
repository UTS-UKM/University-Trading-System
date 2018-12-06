@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
<title>University Trading System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<link href="font-awesome/{{ asset('fonts/backend_fonts/css/font-awesome.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    @yield('content')
   

<script src="{{ asset('js/backend_js/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.interface.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.chat.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.wizard.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script> 



@include('inc.adminDashboard')
</body>
</html>

{{-- end try --}}
@section('content')



 
    
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
{{--           <li class="bg_lo"> <a href="{{ url('admin/view-categories') }}"> <i class="icon-dashboard"></i>Categories </a> </li>--}}
            <li class="bg_lg"> <a href="{{ url('admin/view-products') }}"> <i class="icon-signal"></i> Products</a> </li>
            <li class="bg_lb"> <a href="{{ url('admin/view-user') }}"> <i class="icon-th"></i> Users</a> </li>
            <li class="bg_lb"> <a href="{{ url('/admin/view-swapping-requests') }}"> <i class="icon-th"></i> Swapping Request</a> </li>
          </ul>
        </div>
    <!--End-Action boxes-->  
      
    
      </div>
      <div>Overview</div>
                <div >
                    <canvas id="canvas" height="180" width="400"></canvas>
                </div>
            </div>

      <div style="height:-webkit-fill-available" class="col-md-12">

             
      <center> <h1 class="my-4">Newest Products</h1></center>
 
      <div class="table-responsive">
       <table class="table table-striped table-hover table-condensed">
                    <thead>
                        <tr>
                          <th><strong>ID</strong></th>
                          <th><strong>Name</strong></th>
                          <th><strong>Price</strong></th>
                          <th><strong>Category</strong></th>
                          <th><strong>Description</strong></th>
                          <th><strong>Favourited</strong></th>
                          <th><strong>Image</strong></th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                @foreach($products as $key => $data)
                <tr>
                  
                  <th>{{$data->id}}</th>
                  <th>{{$data->product_name}}</th>
                  <th>{{$data->product_price}}</th>  
                  <td>{{$data->category_id}}</td>
                  <th>{{$data->product_description}}</th>
                  <th>{{$data->favourited}}</th>
            
                  <th><img src="/images/{{$data->id}}_1"  style="width:200px;height:200px;"></th>
                  </tr>
                @endforeach
                      </tbody>
                  </table>
                  </div>
    
    
    <!--end-main-container-part-->
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
    
    </body>
    </html> 
    
    @endsection

