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


   
  
       <center> <h1 class="my-4">Edit Categories</h1>

        <div class="table-responsive">
          <table class="table table-striped table-hover table-condensed">

            <thead>
              
              <tr>
                <td><strong>Name</strong></td>
              </tr>
            </thead>

            <tbody>
              
              <tr>
                <td>
                  <div contenteditable>
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
                   </div>
                </tr>
              </tr>
            </tbody>
          </table>
  </div>

  <div style="margin-top:10px;"class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Update') }}
        </button>
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