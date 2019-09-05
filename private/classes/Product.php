<?php
require_once('Connect.php');

// class Product handles adding new products
class Product extends Connect
{
    public $productSKU;
    public $productName;
    public $productPrice;
    public $attributeType;
    public $attributeSize;
    public $attributeWeight;
    public $attributeHeight;
    public $attributeWidth;
    public $attributeLength;

    public $sql_stmt;

// I reference all possible input fields present in the form. Depending on the attribute type chosen,
// the properties currently displayed will be mandatory to submit via <input required>. The properties that aren't
// currently displayed will be submitted as well with their default value of "0".
     public function addProduct() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->productSKU = mysqli_real_escape_string($this->connectDB(), $_REQUEST['sku']);
            $this->productName = mysqli_real_escape_string($this->connectDB(), $_REQUEST['name']);
            $this->productPrice = mysqli_real_escape_string($this->connectDB(), $_REQUEST['price']);

            $this->attributeType = $_REQUEST['attribute_type'];

            $this->attributeSize = mysqli_real_escape_string($this->connectDB(), $_REQUEST['size']);
            $this->attributeWeight = mysqli_real_escape_string($this->connectDB(), $_REQUEST['weight']);
            $this->attributeHeight = mysqli_real_escape_string($this->connectDB(), $_REQUEST['height']);
            $this->attributeWidth = mysqli_real_escape_string($this->connectDB(), $_REQUEST['width']);
            $this->attributeLength = mysqli_real_escape_string($this->connectDB(), $_REQUEST['length']);

            $this->sql_stmt = $this->connectDB()->prepare("INSERT INTO products (sku, name, price, type, size, weight, height, width, length) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $this->sql_stmt->bind_param("sssssssss", $this->productSKU, $this->productName, $this->productPrice, $this->attributeType, $this->attributeSize, $this->attributeWeight, $this->attributeHeight, $this->attributeWidth, $this->attributeLength);

            $this->sql_stmt->execute();
            $this->connectDB()->close();
        }
         header("Location: ../public/product.html");
     }

}

?>
