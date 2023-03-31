<?php
    include "../lib/session.php";
    Session::checkLogin();

    include "../lib/database.php";
    include "../helper/format.php";

?>
<?php   
    class category_c{

        private $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_c($c_name){
            $c_name = $this->fm->validation($c_name); //kiem tra dau / - dau cach, bien co hop le ko
            

            $c_name = mysqli_real_escape_string($this->db->conn, $c_name); //connect db

            if(empty($c_name)){
                $alert = "Category name must not empty";
                return $alert;
            }else{
                $query = "INSERT INTO Category(CatName) VALUE('$c_name')";
                $result = $this->db->insert($query);

                if($result){
                    $alert = "<span class='success'>Insert Successfully!!</span>";
                    return $alert;
                }else{
                    $alert = "<span class='success'>Insert Fail!!</span>";
                    return $alert;
                }
            }

            
        }
    }
?>  