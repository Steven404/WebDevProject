<?php include_once 'Connector.php';

$UpdateSQL = "UPDATE products SET AVAILABLE=14 WHERE PRODUCT_NAME='Yellow T-Shirt'";
$Update= $db -> query($UpdateSQL);

/* foreach($_POST as $post_var){
	$UpdateSQL = "UPDATE products SET AVAILABLE=14 WHERE PRODUCT_NAME="$post_var"";
	$Update= $db -> query($UpdateSQL);
} */
?>