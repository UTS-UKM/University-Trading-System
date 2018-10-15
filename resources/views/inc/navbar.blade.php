<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    position: fixed;
}



.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}</style>
<nav class="navbar navbar-inverse navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          
        </button>
        <a class="navbar-brand" href="/"><b>UNIVERSITY TRADING SYSTEM</b></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Service</a></li>
          @if (!Auth::check())
          <li class="signup-btn"><a href="/register">Sign Up</a></li>
          <li class="login-btn"><a href="/login">Log In</a></li>
          @endif
          @if (Auth::check())
          <li><a href="product/create">Add product</a></li>
          @endif
          <ul class="nav navbar-nav navbar-right">
            <li>
          <form class="navbar-form" role="search">
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </form>
          </li>
          <li>
          @if (Auth::check()) 
          
          <div class="dropdown">
            <button class="dropbtn">
                     <a href="#"> <i style="color:white;"class="material-icons">person</i> </a>
            </button>
            <div class="dropdown-content">
              <a href="{{ __('user_profile') }}">Profile</a>
              <a href="{{ url('/logout') }}">Logout</a>
            </div>
          </div> 
          @endif
            </li>
        </ul>
       
      
    </div>
  
    
  </nav>