<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/favs-styles.css')}}">
    
    
          <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/> 
          <script src="{{url('assets/js/components/bootstrap.js')}}"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>University Trading System</title>
     </head>
     <style>
               * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img { float:top; }
        
        
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 850px;
          max-height: 450px;
          position: relative;
          float:right;
          margin: 1ch; 
        
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: white;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }

    .slider-item{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.slider-item .slider-image img{
    margin: 0;
    width: 100%;
}
.slider-item .slider-main-detail{
    padding: 10px;
    border-radius: 0 0 5px 5px;
}
.slider-item:hover .slider-main-detail{
    background-color: #dbeeee !important;
}
.slider-item .price{
    float: left;
    margin-top: 5px;
}
.slider-item .price h5{
    line-height: 20px;
    margin: 0;
}
.detail-price{
    color: #219FD1;
}
.slider-item .slider-main-detail .rating{
    color: #777;
}
.slider-item .rating{
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}
.slider-item .btn-add{
    width: 50%;
    float: left;
    border-right: 1px solid #E1E1E1;
}
.slider-item .btn-details{
    width: 50%;
    float: left;
}
.controls{
    margin-top: 20px;
}
.btn-info,.btn-info:visited,.btn-info:hover{
  background-color: #21BBD8;
  border-color: #21BBD8;
}
.btn-info{
  margin-left:5px;
}
.slider-main-detail:hover{
  background-color: #dbeeee !important;
}
.ViewProduct{
  margin: 0px;
  padding:5px;
  border-radius:2px;
  margin-right:10px;
}
.review {
  margin-bottom: 5px;
  padding-top:5px;
}

                .footer {
                   margin-top:50px;
                   position:fixed ;
                   left: 0;
                   bottom: 0;
                   width: 100%;
                   background-color: Black;
                   color: white;
                   text-align: center;
                }
     </style>
     <body>
         @include('inc.navbar')
         
         
    <div class="container">
      @yield('content')
    </div>
    </body>
</html>
