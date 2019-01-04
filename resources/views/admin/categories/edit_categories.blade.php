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
    <center><b><h1>Edit Category</h1></b></center>
 

    <div class="row">
        <div class="col-md-5 col-md-offset-4">


       
      


            
            {!! Form::open(['action' => ['CategoriesController@update', $categoryDetails->id], 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
      
            <div class="form-group">
                    {{ Form::label('category_id', 'Categories') }}
                    {{ Form::select('name', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}

                </div>
                
            <div class="form-group">
                {{ Form::label('categories_name', 'Name') }}
                {{ Form::text('categories_name', $categoryDetails->categories_name, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder' => 'Name')) }}
            </div>
 
            
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