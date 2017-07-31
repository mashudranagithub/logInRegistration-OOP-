<?php
    include "Database.php";
?>

<?php
class User{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function userRegistration($data){
        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $username   = $data['username'];
        $password   = $data['password'];

        $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `username`, `password`) VALUES (:fname,:lname,:email,:username,:password)";

        $query = $this->db->pdo->prepare($sql);

        $query->bindValue(':fname', $fname);
        $query->bindValue(':lname', $lname);
        $query->bindValue(':email', $email);
        $query->bindValue(':username', $username);
        $query->bindValue(':password', $password);

        $result = $query->execute();
        if($result){
            $msg = "Registration successfull.";
            return $msg;
        }
    }
}
