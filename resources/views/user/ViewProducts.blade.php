@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Status</th>
      <th scope="col">Number of views</th>
      
    </tr>
  </thead>
  <tbody>
    	@forelse($product as $result)
    <tr>
      <td>{{$result->product_name}}</td>
      <td>{{$result->product_price}}</td>
      <td>{{$result->product_description}}</td>
      <td>{{$result->product_status}}</td>
      <td>{{$result->clicks}}</td>
      <td><a href="{{url('/user/ViewProducts/ViewProductsStats')}}/{{$result->id}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"> </td>
      <td>
    </tr>
    @empty
    	<h3>No Product found</h3>

    @endforelse

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script>
        
    var year = <?php echo $products; ?>;
    var data_click = <?php echo $click; ?>;


    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Click',
            backgroundColor: "rgba(220,220,220,0.5)",
            data: data_click,
            
        },]
    };


    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                scales: {
                    yAxes: [{
                    ticks: {
                        beginAtZero: true
                                }
                            }]
                    },
                
                elements: {
                    

                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Product Clicks '
                }
            }
        });


    };
</script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>



  </tbody>
</table>
@endsection
