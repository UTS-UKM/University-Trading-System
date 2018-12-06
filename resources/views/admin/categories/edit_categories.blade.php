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
                  <td><strong>ID</strong></td>
                  <td><strong>Name</strong></td>
                 
                </tr>
              </thead>
              <tbody>
    
                  @foreach($categories as $key => $data)
                <tr>
                  <div contenteditable>
                  <td>{{$data->id}}</td>
                  <td>{{$data->name}}</td>
                  
                  </div>
                </tr>
                @endforeach
              </tbody>
           
          


  <div style="margin-top:10px;"class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Update') }}
        </button>
    </div> </table>
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