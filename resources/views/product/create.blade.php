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

        
       
          <?php $id=auth()->user()->id 
                   ?>  
            
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('ItemName', 'Name') }}
                {{ Form::text('ItemName', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('ItemDescription', 'Description') }}
                {{ Form::text('ItemDescription', null, array('class' => 'form-control')) }}

  
            </div>
            <div class="form-group">
                {{ Form::label('ItemPrice', 'Price') }}
                {{ Form::text('ItemPrice', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('ItemStatus', 'Status') }}
                {{ Form::select('ItemStatus', [ 'Available' => 'Available','Not Available'=>'Not Available','In Process'=>'In process'], null, ['class' => 'form-control','placeholder'=>'Select Status']) }}
            </div>

            <div class="form-group">
                    {{ Form::label('CategoryID', 'Categories') }}
                    {{ Form::select('CategoryID', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                </div>
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
                {{ Form::label('image', 'image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>
<center>
            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

</center>

        </div>
    </div>



@endsection
