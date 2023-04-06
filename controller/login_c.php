<?php
    include "../lib/session.php";
    Session::checkLogin();

    include "../lib/database.php";
    include "../helper/format.php";

?>
<?php   
    class login_c{

        private $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function login_admin($username, $pass){
            $username = $this->fm->validation($username); //kiem tra dau / - dau cach, bien co hop le ko
            $pass = $this->fm->validation($pass);

            $username = mysqli_real_escape_string($this->db->conn, $username); //connect db
            $pass = mysqli_real_escape_string($this->db->conn, $pass);

            if(empty($usename) || empty($pass)){
                $alert = "User and Pass must not empty";
                return $alert;
            }else{
                $query = "SELECT * FROM User WHERE Username = '$username' AND Pass = '$pass'";
                $result = $this->db->select($query);

                if($result != false){

                    $value = $result->fetch_assoc();

                    Session::set('login', true);
                    
                    Session::set('id', $value['ID']);
                    Session::set('username', $value['Username']);
                    Session::set('pass', $value['Password']);

                    header('Location:index.php'); //quay ve
                }else{
                    $alert = "Username and Pass not match";
                    return $alert;
                }
            }

            
        }
    }
?>  