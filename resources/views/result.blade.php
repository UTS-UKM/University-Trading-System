@extends('layouts.app')

@section('content')


<div class="container">

  <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Search Result</h4>
            </div>
            <div class="panel-body">
                @if (count($result) > 0 )
                  <table id="contact-table" class="table table-striped">
                      <thead>
                          <tr>
                              <th width="30">ID</th>
                              <th>Name</th>
                              <th>PRICE</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($result as $row)
                          <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->product_name }}</td>
                            <td>{{ $row->product_price }}</td>
                            <td>
                              <a href="/product/{{$row->id}}" class="ViewProduct btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Product</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                  @else
                  <p>No Product Found</p>
                @endif
            </div>
        </div>
    </div>
  </div>

</div> <!-- /container -->


@endsection