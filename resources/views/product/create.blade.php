@extends('layouts.app')



@section('content')

<h1>ADD PRODUCTS </h1>
	
              
         
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
    <center><b><h1>Add Product</h1></b></center>
 

    <div class="row">
        <div class="col-md-5 col-md-offset-4">


       
      <?php 
      $data = DB::table('products')->orderBy('created_at', 'desc')->first();
      if(!empty($data)){
      $maxpid= $data->id;
      $newpid= $maxpid + 1;
      echo "Product ID: " . $newpid;
  }
      ?> 

              <form method="POST" action="{{action('ProductsController@store', $newpid)}}" accept-charset="UTF-8" data-parsley-validate="" enctype="multipart/form-data">

            
            {!! Form::open(['route' => array('product.store'), 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
      
            <div class="form-group">
                    {{ Form::label('category_id', 'Categories') }}
                    {{ Form::select('category_id',$categories, null, ['class' => 'form-control','required','placeholder'=>'Select Category']) }}
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
                <input type="hidden" id="user_id" name="user_id" value="{{$id}}">

                

        

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

    <style>
}
}
</style>



@endsection
