<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Receipt</title>
<link type="text/css" href="purchase_style.css" rel="stylesheet">
</head>
<body>

<?php
// ------VARIABLES------ //
date_default_timezone_set('America/Phoenix');
$date = date("d-M-Y");
$sizeAndPrice = explode(" $",$_POST["size"]);
$size = $sizeAndPrice[0];
$price = $sizeAndPrice[1];
$qty = $_POST["quantity"];
$totalCost = $qty * floatval($price);
$totalCost = round($totalCost, 2);
$firstName = trim($_POST["firstName"]);
$lastName = trim($_POST["lastName"]);
$name = $firstName." ".$lastName;
$city = trim($_POST["city"]);
$stateFull = $_POST["state"];
$state="";
if($stateFull == "arizona")
	$state = "AZ";
else if($stateFull == "california")
	$state = "CA";
else if($stateFull == "colorado")
	$state = "CO";
else if($stateFull == "texas")
	$state = "TX";
else if($stateFull == "washington")
	$state = "WA";

$cityState = $city.", ".$state;
$zip = $_POST['zip'];
// ------END VARIABLES------ //

echo "<div id='bg'>";
echo "<h2>Receipt</h2>";

echo "Purchase date: ".$date."<br>";
echo "Purchased ".$qty." item(s) of size '".
		$size."' at ".$price." each"."<br>";
echo "Total Cost: $".$totalCost."<br><br>";

echo "<fieldset> <legend> Ship to </legend>";
echo $name."<br>";
echo $cityState."<br>";
echo $zip."<br>";
echo "</fieldset>";

?>

<div class="mainFooter">
<button class="button1" onclick="window.location.href='projects.html'">Return to Projects</button>
<button class="button1" onclick="window.location.href='home.html'">Return to Home</button>
</div>

</body>
</html>