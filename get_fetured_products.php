<?php

include('db.php');

$stmt = $con->prepare("SELECT * FROM products");

$stmt->execute();

$featured_products = $stmt->get_result();

?>