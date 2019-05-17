<?php include_once 'Connector.php';
$UpdateSQL = "UPDATE products SET AVAILABLE=14 WHERE PRODUCT_NAME='BLack T-Shirt'";
$Update= $db -> query($SqlCDs);
?>
