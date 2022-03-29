<?php
include "data_config.php";
$query="SELECT * from recipe ";
$result=mysqli_query($conn,$query);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="reciplada.css">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<body style="overflow-x: hidden;">
<div class="wrapper">
    <header class="main-header">
		<a href="index.html"><div class="brand-logo"></div></a>
		<nav class="main-nav">
			<ul>
				<li><div><input type="text" class="search-bar" placeholder="Search..."></div></li>
				<li><a href="sign-in.html"><div class="sign-in">Profile</div></a></li>
				<li><a href="sign-up.html"><div class="sign-up">Log out</div></a></li>
				
			</ul>
		</nav>
	</header>

    <div class="cardcontainer">
       <?php 
       while($row=mysqli_fetch_assoc($result)){
       ?>
           <div class="cards">
           	   <!--IMAGES -->
                <div class="recipe_image">
                	<?php
               	
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['recipe_image'] ).'"style="height:290px;width:100%;"/>';
            
               	?>
                </div>

               <!-- HEADINGS -->
               <div class="card_heading">
               	<?php echo ($row['recipe_name'])." /";?>
               	<?php echo ($row['recipe_time']);?>
               </div>

               <!-- BUTTONS -->
               <div class="buttons_container">
               <form method="post"  action="recipepage.php?id=<?php echo($row['recipe_id'])?>">
               <button class="buttons"  style="position: relative; margin-right: 3.5px;" name="viewrecipe">Details</button>
               </form>
               <form method="post" action="homepage.php?name=<?php echo($row['recipe_name'])?>">
               <button class="buttons" name="add"  style="position: relative;margin-left: 3.5px;" value="add">Add to favourite</button>
               </form>
               </div>


            </div>   
       <?php
        }
       ?>  

    </div>
</div>


</body>
</html>