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
                <li class="bg_lb span3"> <a href="{{ url('admin/view-products') }}"> <i class="icon-signal"></i> Product</a> </li>
                <li class="bg_lo span3"> <a href="{{ url('admin/view-users') }}"> <i class="icon-th"></i> Users</a> </li>
                <li class="bg_ly span3"> <a href="{{ url('admin/') }}"> <i class="icon-th"></i>Admin Dashboard</a> </li>
              </ul>
            </div>
        <!--End-Action boxes-->  

   
  
       <center> <h1 class="my-4">Categories</h1>
        
        <div class="table-responsive">
          <table class="table table-striped table-hover table-condensed">

            <thead>
              
              <tr>
                <th> <font size="+1"><strong>Name</strong></font></th>
                <th> <font size="+1">Delete</font></th>
                <th> <font size="+1">Edit</font></th>
              </tr>
            </thead>

            <tbody>
              
              <tr>
                <td> 
                   <li><a href="/category1">Electronic Devices</a></li>
                   <li><a href="/category2">Electronic Accessories</a></li>
                   <li><a href="/category3">TV & Home Appliances</a></li>
                   <li><a href="/category4">Health & Beauty</a></li>
                   <li><a href="/category5">Babies & Toys</a></li>
                   <li><a href="/category6">Groceries & Pets</a></li>
                   <li><a href="/category7">Home & Lifestyle</a></li>
                   <li><a href="/category8">Women's Fashion</a></li>
                   <li><a href="/category9">Men's Fashion</a></li>
                   <li><a href="/category10">Automotive & Motorcycles</a>
                   <li><a href="/category11">Fashion Accessories</a></li>
                   <li><a href="/category12">Sports & Travel</a></li>
                </td>

                <th>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                  <li><a href="{{url('deletecategories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i></a></li>
                </th>
                <th><a href="{{ url('admin/edit-categories')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> </a></th>
              </tr>
            </tbody>
          </table>
  </div>
       </center>

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