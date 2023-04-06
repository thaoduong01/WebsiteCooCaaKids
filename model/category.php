<?php
    function getall_c(){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM Category");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function list_c($hot){
        $sql = "SELECT * FROM Category WHERE 1 ";
        if($hot==1){
            $sql.="AND hot=1";
        }
        $sql.=" ORDER BY SORT DESC";

        $conn = connect();
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang man

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function getonecat($id){
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM Category WHERE Category_ID=".$id);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;

    }

    function addcat($c_name){
        $conn = connect();
        $sql = "INSERT INTO Category(CatName) VALUES ('$c_name')";

        $conn->exec($sql);


    }

    function updatecat($id, $c_name){
        $conn = connect();
        $sql = "UPDATE Category SET CatName = '$c_name' WHERE Category_ID = ".$id;

        $stmt = $conn->prepare($sql);

        $stmt->execute();

    }

    function delete_c($id){
        $conn = connect();

        $sql = "DELETE FROM Category WHERE Category_ID=" .$id;

        $conn->exec($sql);


    }
?>