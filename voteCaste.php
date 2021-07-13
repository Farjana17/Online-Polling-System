<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","polling") or die(mysqli_error($conn));
echo '<br><h1><center>Student Election System</center></h1>';
$cand_id=$_POST['chosen_candidate'];
?>
<script>
            function validate(){
                var valid = false;
                var x = document.myform.chosen_candidate;

                for(var i=0; x.length;i++)
                {
                    if(x[i].Checked)
                    {
                        valid = true;
                        break;
                    }
                }
                if(valid)
                {

                }else{
                    alart("Please Select a Answer");
                    return false;
                }
            }
        </script>
        <?php 
 header("location: result.php");
$sql2 = "update poll set voteCount = voteCount+1 where id='$cand_id' ";
$query2_result = mysqli_query( $conn, $sql2) or die(mysqli_error($conn));
 ?>
 <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style type="text/css">
	*{
		text-align: center;
	}
	.c1{
		border: 2px solid yellow;
		display: inline-block;
		padding: 10px 20px;
	}
	h1{
		color: aqua;
	}
</style>