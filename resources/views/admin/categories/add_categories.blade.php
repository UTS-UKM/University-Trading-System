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
          <li class="bg_lo"> <a href="{{ url('admin/view-categories') }}"> <i class="icon-dashboard"></i>View Category </a> </li>
          <li class="bg_lo"> <a href="{{ url('admin/delete-categories') }}"> <i class="icon-dashboard"></i>Delete Category </a> </li>
          <li class="bg_lg"> <a href="{{ url('admin/view-products') }}"> <i class="icon-signal"></i> Products</a> </li>
          <li class="bg_lb"> <a href="tables.html"> <i class="icon-th"></i> Users</a> </li>
          <li class="bg_ly span3"> <a href="{{ url('admin/') }}"> <i class="icon-th"></i>Admin Dashboard</a> </li>
        </ul>
      </div>

  <!--End-Action boxes-->  

    <center><b><h1>Add Category</h1></b></center>
 

    <div class="row">
        <div class="col-md-5 col-md-offset-4">

            <style>
                input[type=text]:focus {
    border: 3px solid #555;

    select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;


}
</style>

       
      <?php 
      $data = DB::table('categories')->orderBy('created_at', 'desc')->first();
   
      ?> 
 
            {!! Form::open(['route' => array('category.store'), 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
 
            <div class="form-group">
                {{ Form::label('categories_name', 'Name') }}
                {{ Form::text('categories_name', null, array('class' => 'form-control','style'=>'height:100px','required'=>'','minlength'=>'5')) }}
            </div>
       
                 <?php $id=auth()->user()->id 
                   ?>  
                <input type="hidden" id="user_id" name="user_id" value="{{$id}}">

                
    <style>
        input[type=button], input[type=submit], input[type=reset] 
.button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
}
</style>

<center>
            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

</center>

        </div>
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

