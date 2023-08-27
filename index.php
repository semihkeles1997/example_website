<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOYUYO</title>
</head>
<body>

HEY
<form method="post">
	Kajun: <input type="checkbox" name="yemek[]" value="Kajun"> <br>
	Tenders: <input type="checkbox" name="yemek[]" value="Tenders"> <br>
	Chicken Burger: <input type="checkbox" name="yemek[]" value="chicken_burger"> <br>
	<input type="submit" name="hesapla" value="HESAPLA">
</form>
</body>
</html>
<?php
if (isset($_POST["hesapla"])) 
{
	$masa = $_GET["masa"];
	if (isset($_POST['yemek'])) 
	{
	    print_r($_POST['yemek']); 
	}
}

?>
