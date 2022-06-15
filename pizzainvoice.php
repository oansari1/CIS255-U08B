<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CID Assignment U08B</title>

<!--

CID Name Assignment U08B

What objectives are you demonstrating?

Receiving data via POST
Assigning values to variables from incoming data
Processing data and returning a page with proper markup

-->

<style>


</style>

</head>
<body>
<?php
// Get pizza data sent by POST
// isset() tests for data at the gateway, required on many servers
// Dropdown list passes values ($size), Checkboxes pass an array of checked values



if(isset($_POST["customerName"])) { $name = $_POST["customerName"]; } else { $name = ""; }
if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
//Build a table for invoice - for some reason I keep getting an empty tag after my h2? It's not in the code but keeps showing up
print "

<h1>O'Malley's Authentic Italian Pizzeria</h1>
<h2>Customer name: $name</h2>
<table><tr><th>Size:</th><td>$size</td><td>";
// Print the selected size and price of the size, add price to running total
if($size == "Small") {$total = 9.99; print $total;}
if($size == "Medium") {$total = 11.99; print $total;}
if($size == "Large") {$total = 468.38; print $total;}
print "</td></tr><><th>Toppings:</th>";
// Print topping and price if checked, then add to the total
if(isset($_POST["topping"])) {
    if(in_array("Pepperoni", $_POST['topping'])) {$total += 0.99; print "<tr><td>Pepperoni</td><td>$0.99</td></tr>";}
    if(in_array("Pumpkin", $_POST['topping'])) {$total += 0.99; print "<tr><td>Pumpkin</td><td>$0.99</td></tr>";}
    if(in_array("Escargot", $_POST['topping'])) {$total += 1.99; print "<tr><td>Escargot</td><td>$1.99</td></tr>";}
    if(in_array("Gerbils", $_POST['topping'])) {$total += 8.99; print "<tr><td>Gerbils</td><td>$8.99</td></tr>";}
}
else
{print "<tr><td>Just Cheese</td></tr>";}

print "<tr><th>Total: </th><td>$ $total</td></tr></table>";





?>
</body>
</html>