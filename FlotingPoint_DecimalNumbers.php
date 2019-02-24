<!DOCTYPE html>
<html>
<head>
	<title>Floating points </title>
</head>
<body>
<?php
$float = 6.28;
echo "$float <br>";
$float += 5; echo "$float <br>";
$x = 10/3;
echo $x;
$y = 10/0; echo $y;
?>
<h2>Functions</h2>
Round : <?php echo($float)?><br>
Round up : <?php echo ceil($float)?><br>
Round down : <?php echo floor($float)?><br>

</body>
</html>