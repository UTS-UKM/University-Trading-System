@extends('layouts.app')



@section('content')

    <center><b><h1>Add Product</h1></b></center>
 

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



}
</style>

        
       
         
            
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('product_name', 'Name') }}
                {{ Form::text('product_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('product_description', 'Description') }}
                {{ Form::text('product_description', null, array('class' => 'form-control')) }}

  
            </div>
            <div class="form-group">
                {{ Form::label('product_price', 'Price') }}
                {{ Form::text('product_price', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('ItemStatus', 'Status') }}
                {{ Form::select('ItemStatus', [ 'Available' => 'Available','Not Available'=>'Not Available','In Process'=>'In process'], null, ['class' => 'form-control','placeholder'=>'Select Status']) }}
            </div>

            <div class="form-group">
                    {{ Form::label('name', 'Categories') }}
                    {{ Form::select('name', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                </div>

                 <?php $id=auth()->user()->id 
                   ?>  
                <input type="hidden" id="UserID" name="UserID" value="{{$id}}">

                
    <style>
        input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
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
