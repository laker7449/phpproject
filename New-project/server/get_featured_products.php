<?php

include('connection.php');
$stmt = $con->prepare("SELECT * FROM products LIMIT 20");

$stmt->execute();

$featured_products = $stmt->get_result();

?>