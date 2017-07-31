<?php
    include "Database.php";
?>

<?php
class User{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
