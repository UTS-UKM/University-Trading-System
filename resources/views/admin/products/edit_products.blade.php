@extends('layouts.app')



@section('content')
	
            
         
            <style>
                input[type=text]:focus {
                border: 3px solid #555;
            }
                select {
                width: 100%;
                padding: 16px 20px;
                border: none;
                border-radius: 4px;
                background-color: #f1f1f1;
                  } 
                  
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
</style>
    <center><b><h1>Edit Product</h1></b></center>
 

    <div class="row">
        <div class="col-md-5 col-md-offset-4">


       
      


            
            {!! Form::open(['action' => ['ProductsController@update', $productDetails->id], 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
      
            <div class="form-group">
                    {{ Form::label('category_id', 'Categories') }}
                    {{ Form::select('name', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}

                </div>
                
            <div class="form-group">
                {{ Form::label('product_name', 'Name') }}
                {{ Form::text('product_name', $productDetails->product_name, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder' => 'Name')) }}
            </div>
            

            <div class="form-group" >
                {{ Form::label('product_description', 'Description' ) }}
                {{ Form::textarea('product_description', $productDetails->product_description, array('class' => 'form-control','required'=>'','minlength'=>'5' )) }}
               

  
            </div>
            <div class="form-group">
                {{ Form::label('product_price', 'Price') }}
                {{ Form::text('product_price', $productDetails->product_price, array('class' => 'form-control','required'=>'','minlength'=>'1','placeholder' => 'RM')) }}
            </div>
            <div class="form-group">
                    {{ Form::label('product_status', 'Status') }}
                    <select name="product_status">
                            <option value="available" >Available </option>
                            <option value="unavailable">Unavailable</option>
                        </select>

                </div>

         

         

                 <?php $id=auth()->user()->id 
                   ?>  
                <input type="hidden" id="user_id" name="user_id" value="{{$id}}">

                

        

            
<center>
            {{Form::hidden('_method', 'PUT')}}
            {{ Form::submit('Update', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

</center>

        </div>
    </div>

    <style>
}
}
</style>



@endsection