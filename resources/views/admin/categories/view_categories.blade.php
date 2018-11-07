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

{{-- end try --}}
@section('content')

 

    <!--Action boxes-->
            <div class="quick-actions_homepage">
              <ul class="quick-actions">
                <li class="bg_lo"> <a href="{{ url('admin/add-categories') }}"> <i class="icon-dashboard"></i>Add Category </a> </li>
                <li class="bg_lo"> <a href="{{ url('admin/delete-categories') }}"> <i class="icon-dashboard"></i>Delete Category </a> </li>
                <li class="bg_lg"> <a href="charts.html"> <i class="icon-signal"></i> Products</a> </li>
                <li class="bg_lb"> <a href="tables.html"> <i class="icon-th"></i> Users</a> </li>
                <li class="bg_ly span3"> <a href="{{ url('admin/') }}"> <i class="icon-th"></i>Admin Dashboard</a> </li>
              </ul>
            </div>
        <!--End-Action boxes-->  

        <div style="height:-webkit-fill-available" class="col-md-12"
  
       <center> <h1 class="my-4">Categories</h1></center>
        <div class="list-group">
                <a href="#" class="list-group-item">Electronic Devices</a>
                <a href="#" class="list-group-item">Electronic Accessories</a>
                <a href="#" class="list-group-item">TV & Home Appliances</a>
                <a href="#" class="list-group-item">Health & Beauty</a>
                <a href="#" class="list-group-item">Babies & Toys</a>
                <a href="#" class="list-group-item">Groceries & Pets</a>
                <a href="#" class="list-group-item">Home & Lifestyle</a>
                <a href="#" class="list-group-item">Women's Fashion</a>
                <a href="#" class="list-group-item">Men's Fashion</a>
                <a href="#" class="list-group-item">Automotive & Motorcycles</a>
                <a href="#" class="list-group-item">Fashion Accessories</a>
                <a href="#" class="list-group-item">Sports & Travel</a>
        </div>
        
      </div>

@endsection