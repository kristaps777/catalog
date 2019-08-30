<?php
require_once('../private/config.php');

// class Connect handles DB connection, DB status and retreives DB data
class Connect
{
    public $conn_DB;
    public $sql_request;
    public $send_sql;
    public $sql_response;

    public function connectDB() {
        $this->conn_DB = mysqli_connect(SERVER, USER, PW, DB);
        if ($this->conn_DB) {
            return $this->conn_DB;
        } else {
            $dbError += "Error: Unable to connect to MySQL." . PHP_EOL . "<br>";
            $dbError += "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
            $dbError += "Debugging error: " . mysqli_connect_error() . PHP_EOL . "<br>";
            exit;
        }
    }

    public function getData() {
        $this->sql_request = "SELECT * FROM products";
        $this->send_sql = $this->connectDB()->query($this->sql_request);
        $this->sql_response = $this->send_sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->sql_response as $key => $row) {
        echo "<ul class='item'>";
        echo "<li>$row[sku]</li>";
        echo "<li>$row[name]</li>";
        echo "<li>&euro;$row[price]</li>";
        echo "</ul>";
        
    }
        mysqli_close($this->connectDB());
    }
}
?>
