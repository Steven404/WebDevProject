<?php include_once 'Connector.php'
$SqlCDs = "SELECT * FROM products WHERE AVAILABLE!=0 AND PRODUCT_NAME='CD'";
$AvailableCDs= $db -> query($SqlCDs);

while ($Product= mysqli_fetch_assoc($AvailableCDs)?>

 ?>
