<?php include_once 'Connector.php';
include 'Cart.js'
$UpdateSQL = "UPDATE products SET AVAILABLE=14 WHERE PRODUCT_NAME='".row["title"]"'";
$Update= $db -> query($SqlCDs);
?>