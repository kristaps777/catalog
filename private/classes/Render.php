<?php
require_once('Connect.php');

// class Render handles data display
class Render extends Connect
{

    public function displayData() {
// Since class Render is a child of class Connect, I can use getData() from class Connect that returns the data from DB
// and process it.
        foreach ($this->getData() as $key => $row) {
        echo "<ul class='item flex flex_align_center flex_justify_center'>";
        echo "<input type='checkbox' name='select[]' value='$row[id]'";
        echo "<li>$row[sku]</li>";
        echo "<li>$row[name]</li>";
        echo "<li>&euro;$row[price]</li>";
        if ($row['type'] == "DVD") {
            echo "<li>Size: $row[size] MB</li>";
        } elseif ($row['type'] == "Furniture") {
            echo "<li>Dimensions(in cm): $row[height]x$row[width]x$row[length]</li>";
        } elseif ($row['type'] == "Book") {
            echo "<li>Weight: $row[weight] kg</li>";
        }
        echo "</ul>";
        
    }
    }
}
?>
