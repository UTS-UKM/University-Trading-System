
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
    
var year = <?php echo $productname; ?>;
var data_click = <?php echo $click; ?>;
var data_favourite = <?php echo $productFavourite; ?>;


var barChartData = {
    labels: year,
    datasets: [{
        label: 'Click',
        backgroundColor: "rgba(220,220,220,0.5)",
        data: data_click,
        
    },{
        label: 'Favourited',
        backgroundColor: "rgba(252,222,0,0.5)",
        data: data_favourite,
        
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
