<?php
include "data_config.php";

// FILTER TO CHOOSE RECIPE WITH INGREDIENT NAME SALT AND SUGAR 

$sql="SELECT DISTINCT r.recipe_name from recipe r
inner join recipe_ingredient ri on ri.recipe_id=r.recipe_id
inner join ingredient i on i.ingredient_id=ri.ingredient_id
where i.ingredient_name='Salt' OR i.ingredient_name='sugar'   ";

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	echo $row['recipe_name']."<br>";
}

?>


<?php

echo "<h1>RELATED RESULTS</h1>";

 if(isset($_POST['search'])){
 	if(!empty($_POST['ingredient'])){

 	$ingredient=$_POST['ingredient'];
	$icount=count($ingredient);
 	echo $icount."<br>";

    if(in_array('all', $ingredient)){
        echo "all is selected<br><br>";
        $sql="SELECT * from recipe";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
                    echo $row['recipe_name']."<br>";
                    }

    }else{


 	switch ($icount) {
 		case 0:
 		       echo "nothing selected";
 		break;
 		case 1:
 			   echo "one is selected<br><br>";
 			    	$ing1=$ingredient[0];
 	                
                    $sql="SELECT DISTINCT r.recipe_name from recipe r
                    inner join recipe_ingredient ri on ri.recipe_id=r.recipe_id
                    inner join ingredient i on i.ingredient_id=ri.ingredient_id
                    where i.ingredient_name='$ing1' ";

                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
	                echo $row['recipe_name']."<br>";
                    }
 			break;

 		case 2:
 			   echo "two is selected<br><br>";
 			    	$ing1=$ingredient[0];
 			    	$ing2=$ingredient[1];
 	                
                    $sql="SELECT DISTINCT r.recipe_name from recipe r
                    inner join recipe_ingredient ri on ri.recipe_id=r.recipe_id
                    inner join ingredient i on i.ingredient_id=ri.ingredient_id
                    where i.ingredient_name='$ing1' or i.ingredient_name='$ing2' ";

                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
	                echo $row['recipe_name']."<br>";
                    }
 			break; 	

 		case 3:
 			   echo "three is selected<br><br>";
 			    	$ing1=$ingredient[0];
 			    	$ing2=$ingredient[1];
 			    	$ing3=$ingredient[2];
 	                
                    $sql="SELECT DISTINCT r.recipe_name from recipe r
                    inner join recipe_ingredient ri on ri.recipe_id=r.recipe_id
                    inner join ingredient i on i.ingredient_id=ri.ingredient_id
                    where i.ingredient_name='$ing1'or i.ingredient_name='$ing2' or i.ingredient_name='$ing3'
                     ";

                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
	                echo $row['recipe_name']."<br>";
                    }
 			break; 	

 		
 		default:
 			       echo "nothing to display";
 			break;
 	}
 }

}
 }




?>