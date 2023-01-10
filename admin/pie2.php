
<?php
include "partials/_dbconnect.php";
 
$sql4 = "select * from comments";
$sql5 = "select * from comments where status = 'approved'";
$sql6 = "select * from comments where status = 'Not approved'";
$sql7 = "select * from comments where status = 'Rejected'";
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);
$result6 = mysqli_query($conn, $sql6);
$result7 = mysqli_query($conn, $sql7);

$capproved = ((mysqli_num_rows($result5)/mysqli_num_rows($result4))*100);
$cNotapproved = ((mysqli_num_rows($result6)/mysqli_num_rows($result4))*100);
$crejected = ((mysqli_num_rows($result7)/mysqli_num_rows($result4))*100);







$sql = "select * from threads";
$sql1 = "select * from threads where status = 'approved'";
$sql2 = "select * from threads where status = 'Not approved'";
$sql3 = "select * from threads where status = 'Rejected'";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);



$approved = ((mysqli_num_rows($result1)/mysqli_num_rows($result))*100);
$Notapproved = ((mysqli_num_rows($result2)/mysqli_num_rows($result))*100);
$rejected = ((mysqli_num_rows($result3)/mysqli_num_rows($result))*100);





?>



<!DOCTYPE html>
<html>
<head>
    <title>ChartJS - Pie</title>
    
    <link href="./default.css" rel="stylesheet">
   
</head>
<body>

	<div class="chart-container ">
		
      <div class="pie1 shadow-sm ">
		<div class="pie-chart-container text-center">
			<h2>Threads</h2>
			<canvas id="pie-chartcanvas-2"></canvas>
		</div>
	</div>
	<div class="aw"></div>
	<div class="pie2 shadow-sm">
			
		<div class="pie-chart-container  text-center">
			<h2>Comments</h2>
			<canvas id="pie-chartcanvas-1"></canvas>
		</div>
	</div>
	</div>

	<!-- javascript -->
    <script src="./jquery.min.js"></script>
    <!-- <script src="js/Chart.min.js"></script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		$(document).ready(function () {

var ctx1 = $("#pie-chartcanvas-1");
var ctx2 = $("#pie-chartcanvas-2");
var capproved = '<?php echo $capproved; ?>';
var cnotapproved = '<?php echo $cNotapproved; ?>';
var crejected = '<?php echo $crejected; ?>';

console.log(capproved)
console.log(cnotapproved)
console.log(crejected)

var data1 = {
	labels : ["Approved", "Not Approved", "Rejected"],
	datasets : [
		{
			label : "Comments",
			data : [capproved, cnotapproved, crejected],
			backgroundColor : [
				"#DEB887",
				"#A9A9A9",
				"#DC143C"
			],
			borderColor : [
				"#CDA776",
				"#989898",
				"#CB252B"
			],
			borderWidth : [5, 5, 5]
		}
	]
};


var Approved = '<?php echo $approved; ?>';
var NotApproved = '<?php echo $Notapproved; ?>';
var Rejected = '<?php echo $rejected; ?>';



var data2 = {
	labels : ["Approved", "Not Approved", "Rejected"],
	datasets : [
		{
			label : "Threads",
			data : [Approved, NotApproved, Rejected],
			backgroundColor : [
				"#FAEBD7",
				"#DCDCDC",
				"#E9967A"
			],
			borderColor : [
				"#E9DAC6",
				"#CBCBCB",
				"#D88569"
			],
			borderWidth : [5, 5, 5]
		}
	]
};

var options = {
	title : {
		display : true,
		position : "top",
		text : "Pie Chart",
		fontSize : 18,
		fontColor : "#111"
	},
	legend : {
		display : true,
		position : "bottom"
	}
};


var chart1 = new Chart( ctx1, {
	type : "pie",
	data : data1,
	options : options
});

var chart2 = new Chart( ctx2, {
	type : "pie",
	data : data2,
	options : options
});

});
		</script>

    
    
</body>
</html>