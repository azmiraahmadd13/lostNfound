<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="graphite.js"></script>
<script src="bar_chart.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

</head>


<body>





<div class="main">
  
    <?php include 'menuA.php'; ?>
    
  
  </div>






<div id="data">



<center><h1>Data available</h1></center>
    <form><div style="width:600px;" class="resultados"><canvas id="mycanvass"></canvas></div></form>

     
                  
<?php
include 'connection.php' ;

$conn = mysqli_connect ('localhost','root','','lostnfound');
if(!$conn)
{
	trigger_error('Could not connect to MySql:'. mysqli_connect_error());
}

$query = "SELECT received_date,sum(item_details) FROM lost_item
group by MONTH(received_date) order by received_date DESC limit 12 "; //query to get the 12 month in descending order.
$result = mysqli_query($conn, $query);
$cart = array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$date = $row['sum(item_details)']; //get dateandtime field 
	$month=strtotime($date); 
	$month=date("F",$month); // convert 5 to MAY as month  // Show year 
	
}
mysqli_close($conn);

?>  
    

    <form><div id="piechart" style="width: 600px; height: 500px;"></div></form>
    <?php  
 $conn = mysqli_connect("localhost", "root", "", "lostnfound");  
 $sql = "SELECT item_status, count(*) as number FROM lost_item GROUP BY item_status";  
 $result = mysqli_query($conn, $sql);  
 ?>  
</div>

<div class="footer">

</div>

</body>
</html>

  <script >

       $(document).ready(statistic(2017));  
                function statistic(tarikh){
                   
                    $.ajax({
                        type:'POST',
                        url:'process.php',
                         data:'tarikh='+tarikh,
                        success:function(response){

                            var valores = eval(response);
                            
                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];

                     
                           
                                
                            var Datos = {
                                    labels : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                    datasets : [

                                        {
                                            label: "Grit Sand",
                                              fillColor : "rgba(66, 134, 244,0)",
                                            strokeColor : "rgba(66, 134, 244,1)",
                                            pointColor : "rgba(66, 134, 244,1)",
                                            pointStrokeColor : "#fff",
                                            pointHighlightFill : "#fff",
                                            pointHighlightStroke : "rgba(66, 134, 244,1)",
                                           
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d],
                                        }
                                       

                                    ]
                                }
                                
                            var contexto = document.getElementById('mycanvass').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });

               
                    return false;
                }
                    
</script>
<script type="text/javascript">
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
          function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                            while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["item_status"]."', ".$row["number"]."],";  
                          } 
                        ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Item Status',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           
    </script>