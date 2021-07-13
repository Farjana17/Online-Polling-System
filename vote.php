<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <style>
    body{
        backgroud-color:#345;
        font-family: "Secular One", serif;
        text-align: center;
        max-width: 750px;
        margin-right: auto;
        margin-left: auto;
    } 
    h1{
        color: aqua;
    }
    .btn{
        padding:5px 15px;
        background-color: #00ffd2;
    }
</style>
</head>
 <body>
 


<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polling";

echo "<h1>Online Polling System System </h1>";
echo"<h2>Please vote your Opinion.</h2>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, title FROM poll";
$result = $conn->query($sql);

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
 
<form action='voteCaste.php' name="myform" method='POST'>
    <table class="table">
       
<?php	
if($result && $result->num_rows) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "    ". $row["title"]. "<hr>";
        echo "<tr><label>";
    	echo "<input type=\"radio\" name=\"chosen_candidate\" value=\"".$row['id']."\">";
        echo "     ". $row["name"]. "<br><hr>";
        echo "</label></tr>";
    }
} else {
    echo "0 results";
}


$conn->close();
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
</table>
<input type="submit" value="Vote Now" onClick='validate()' class="btn">
</form>
 </body>
 </html>