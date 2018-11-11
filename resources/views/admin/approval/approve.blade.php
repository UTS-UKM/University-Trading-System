@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Buyer ID</th>
            <th>Seller ID</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <tr>
                <td>1</td>
                <td>P1</td>
                <td>News Cate</td>
                <td>Johnny</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-ok"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>P2</td>
                <td>Main Products</td>
                <td>Johnny</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-ok"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>P3</td>
                <td>Parent Blogs</td>
                <td>Johnny</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-ok"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></td>
            </tr>
    </table>
    </div>
</div>
@endsection
