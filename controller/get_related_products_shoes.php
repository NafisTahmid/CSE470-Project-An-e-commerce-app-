<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='shoes' LIMIT 1");

$stmt->execute();


$related_products_shoes = $stmt->get_result();

?>