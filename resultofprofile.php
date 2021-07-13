<?php 
session_start();
 ?>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
</head>
<h1>Online Polling System System </h1>
<?php 


$conn = mysqli_connect("localhost", "root", "", "polling_system") or die(mysqli_error($conn));
$query = "Select id, name, voteCount FROM poll";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$totalRows = mysqli_num_rows($result);
echo "<h2 style='text-align:center;'>Voting Result</h2>";


//finding total casted vote
$sum2=0;
while ($row2 = mysqli_fetch_assoc($result)){
    $sum2 += $row2['voteCount'];
}

echo "<h5>Total Number of casted vote till Now: <b>$sum2</b></h5> <br><br>";

// set the pointer back to the beginning
mysqli_data_seek($result, 0);

?>

<table class="table table-striped table-bordered table-hover">
		<tr>  <th>Answer</th> <th>Total Votes </th> <th>Vote Percentage</th></tr>

<?php
	if($totalRows>0){
		while($row = mysqli_fetch_array($result)){
?>
		<tr>
			
			<td><?php echo $row['name'];?> </td>
			<td><b><?php echo $row['voteCount'];?></b> </td>
			<td><?php echo round(votePercent($row['voteCount']),2)." %"; ?></td>
		</tr>

<?php
		}
	}
	else{
		
	}
	//echo "sum2 = $sum2";
	function votePercent($castedVote){
		global $sum2;
		$percent = $castedVote * 100 /$sum2; // sum2 is total casted vote
		return $percent;
	}
 ?>
		
</table>
<style type="text/css">
	
	body{
		padding-left: 10%;
		padding-right: 10%;
		text-align: center;
		font-family: "Secular One", serif;
		
	}
	table{
		text-align: center;
	}
		
	h1 {
	   font-size: 36px;
	   font-family: "Secular One", serif;
	   color: orange;
	}
	.btn{
		padding:5px 15px;
		background-color: #00ffd2;
	}
}
</style>
