<?php
    function taodonhang($madh, $total, $pttt, $name, $address, $email, $phone){
        $conn = connect();
    
        $sql = "INSERT INTO tbl_order(ID_Order, Total, Pttt, Name, Address, Email, Phone) 
        VALUES ('$madh', '$total', '$pttt', '$name', '$address', '$email', '$phone')";

        $conn->exec($sql);
        
        $last_id = $conn->lastInsertId();
        return $last_id;
        
    }

    function loadView($viewName, $data = []) {
        extract($data);
        require_once "views/$viewName.php";
    }
    
?>