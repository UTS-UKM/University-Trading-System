@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>

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

@section('content')

 

    <!--Action boxes-->
            <div class="quick-actions_homepage">
              <ul class="quick-actions">
                <li class="bg_lo"> <a href="{{ url('admin/view-categories') }}"> <i class="icon-signal"></i> Category</a> </li>
                <li class="bg_lb"> <a href="{{ url('admin/view-users') }}"> <i class="icon-th"></i> Users</a> </li>
                <li class="bg_ly span3"> <a href="{{ url('admin/') }}"> <i class="icon-th"></i>Admin Dashboard</a> </li>
              </ul>
            </div>
        <!--End-Action boxes-->  

        <div style="height:-webkit-fill-available" class="col-md-12"
  
       <center> <h1 class="my-4">Products</h1></center>
  
       <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th><strong>ID</strong></th>
              <th><strong>Name</strong></th>
              <th><strong>Price</strong></th>
              <th><strong>Description</strong></th>
              <th><strong>Image</strong></th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

      
          </tbody>
        </table>
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
      
      </body>
      </html> 
      
@endsection