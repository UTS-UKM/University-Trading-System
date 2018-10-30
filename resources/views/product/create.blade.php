@extends('layouts.app')



@section('content')








<h1>ADD PRODUCTS </h1>
	
              
         
            
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
                {{ Form::textarea('product_description', null, array('class' => 'form-control','required'=>'','minlength'=>'5' )) }}
               

  
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




@endsection
