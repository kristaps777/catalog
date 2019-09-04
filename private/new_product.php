<?php
// When the user presses the add button, this script is executed.
// I call upon class Product and the appropriate child function responsible for adding a product to DB.
require_once('../private/classes/Product.php');
$add_product = new Product();
$add_product->addProduct();
?>
