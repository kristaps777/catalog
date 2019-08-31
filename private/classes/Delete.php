<?php 
require_once('Connect.php');

// class Delete handles mass deletion of selected products
class Delete extends Connect
{
    public $checkbox;

    public function massDelete() {
        if (isset($_POST[mass_delete])) {
            $this->checkbox = $_POST['select'];
            while (list ($key, $val) = @each ($this->checkbox)) {
            mysqli_query($this->connectDB(), "DELETE FROM products WHERE id=$val");
            }
        }
    header("Location: ../public/index.php");     
    }
}
?>
