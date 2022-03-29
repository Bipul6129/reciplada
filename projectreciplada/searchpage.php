<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Page</title>
</head>
<body>
	<form method="post" action="searchalgorithm.php">
	<input type="checkbox" name="ingredient[]" value="apple">apple<br>
	<input type="checkbox" name="ingredient[]" value="salt">salt<br>
	<input type="checkbox" name="ingredient[]" value="flour">flour<br>
	<input type="checkbox" name="ingredient[]" value="milk">milk<br>
	<input type="checkbox" name="ingredient[]" value="banana">banana<br>
	exclude<br>
	<input type="checkbox" name="" value="apple">apple<br>
	<input type="checkbox" name="" value="salt">salt<br>
	<input type="checkbox" name="" value="flour">flour<br>
	<input type="checkbox" name="" value="milk">milk<br>
	<input type="checkbox" name="" value="banana">banana<br>

	<input type="checkbox" name="ingredient[]" value="all">all<br>
	<button name='search'>SEARCH</button>
    </form>


</body>
</html>