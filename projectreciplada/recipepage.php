<?php
include "data_config.php";
if(isset($_POST['viewrecipe'])){
	$id=$_GET['id'];
	$recsql="select * from recipe where recipe_id=$id";
	$res=mysqli_query($conn,$recsql);
	while($row=mysqli_fetch_assoc($res)){
		echo $row['recipe_name']."<br>";
		echo $row['recipe_description']."<br><br>";
		echo $row['recipe_direction'];
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RECIPEPAGE</title>
</head>
<body>

</body>
</html>