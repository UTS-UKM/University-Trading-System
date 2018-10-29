@extends('layouts.app')



@section('content')


 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/form1.css" rel="stylesheet">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">

            <style>
                @import "http://fonts.googleapis.com/css?family=Raleway";
body{
font-family:'Raleway',sans-serif
}
img#logo{
margin-left:90px
}
div#first{
width:350px;
height:auto;
margin:50px auto 0;
padding:50px;
background-color:#EEE;
color:#333;
border:2px solid #C2D6FF;
border-radius:40px 0 40px 0
}
label{
font-size:15px;
font-weight:700
}
input#fname{
background-image:url(../images/icon_name.png);
background-repeat:no-repeat;
background-position:6px;
border:1px solid #DADADA;
margin-top:10px;
margin-bottom:10px;
padding-left:35px;
width:310px;
height:30px;
font-size:14px;
box-shadow:0 0 10px;
-webkit-box-shadow:0 0 10px;
/* For I.E */
-moz-box-shadow:0 0 10px;
/* For Mozilla Web Browser */
border-radius:5px;
-webkit-border-radius:5px;
/* For I.E */
-moz-border-radius:5px
/* For Mozilla Web Browser */
}

/* For I.E */
-moz-border-radius:5px
/* For Mozilla Web Browser */
}
input#contact{
background-image:url(../images/mobile.png);
background-repeat:no-repeat;
background-position:6px;
border:1px solid #DADADA;
margin-top:10px;
margin-bottom:10px;
padding-left:35px;
width:310px;
height:30px;
font-size:14px;
box-shadow:0 0 10px;
-webkit-box-shadow:0 0 10px;
/* For I.E */
-moz-box-shadow:0 0 10px;
/* For Mozilla Web Browser */
border-radius:5px;
-webkit-border-radius:5px;
/* For I.E */
-moz-border-radius:5px
/* For Mozilla Web Browser */
}

/* For I.E */
-moz-box-shadow:0 0 10px;
/* For Mozilla Web Browser */
border-radius:5px;
-webkit-border-radius:5px;
/* For I.E */
-moz-border-radius:5px
/* For Mozilla Web Browser */
}
input#submit {
background-color:#cc7a66;
border-radius:5px;
border:none;
padding:10px 25px;
color:#FFF;
text-shadow:1px 1px 1px #949494;
margin-left:120px
}
input#submit:hover{
background-color:#FF9980
}

.the-legend {
    border-width:4px !important;
    color:#cc7a66;
    margin:center
    
}
.well-the-fieldset {
    border-width:4px !important;
    color:#cc7a66;
    margin:center
    
}

</style>



	<form>
     
                    <fieldset class="well-the-fieldset">
                        <legend class="the-legend">Add Product</legend>
              
         
            
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <div class="form-group">
                    {{ Form::label('name', 'Categories') }}
                    {{ Form::select('name', $categories, null, ['class' => 'form-control','required','placeholder'=>'Select Category']) }}
                </div>
            <div class="form-group">
                {{ Form::label('product_name', 'Name') }}
                {{ Form::text('product_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder' => 'Name')) }}
            </div>
            

            <div class="form-group" >
                {{ Form::label('product_description', 'Description' ) }}
                {{ Form::text('product_description', null, array('class' => 'form-control','required'=>'','minlength'=>'5','style'=>'height:200px' )) }}
               

  
            </div>
            <div class="form-group">
                {{ Form::label('product_price', 'Price') }}
                {{ Form::text('product_price', null, array('class' => 'form-control','required'=>'','minlength'=>'1','placeholder' => 'RM')) }}
            </div>

         

         

                 <?php $id=auth()->user()->id 
                   ?>  
                <input type="hidden" id="UserID" name="UserID" value="{{$id}}">

                
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

        

            <div class="form-group">
                {{ Form::label('product_pic_1', 'image') }}
                {{ Form::file('product_pic_1',array('class' => 'form-control')) }}
            </div>
<center>
            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

</center>

        </div>
    </div>
</form>
</fieldset>



@endsection
