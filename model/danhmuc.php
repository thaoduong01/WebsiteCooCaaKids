<?php 
    require_once("database.php");

    class danhmuc extends database{
        public function Doc_mon_an(){
            $sql = "SELECT * FROM Category";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function getFoodById($id) {
    
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM Category WHERE Category_ID = $id";
    
            // Thực hiện truy vấn và lấy kết quả
            $this->setQuery($sql);
            // Trả về dữ liệu chi tiết của món ăn
            return  $this->loadAllRows();
        }
    }
?>