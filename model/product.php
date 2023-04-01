<?php
    function getall_p(){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM Product");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function list_p($hot){
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

    function getone($id){
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM Category WHERE Category_ID=".$id);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;

    }

    function insert_product($idcat, $name, $price, $Img){
        $conn = connect();
        $sql = "INSERT INTO Product(Name, Category_ID, Price, Img) VALUES ('$idcat', '$name', '$price', '$Img')";

        $conn->exec($sql);


    }

    function delete($id){
        $conn = connect();

        $sql = "DELETE FROM Product WHERE ID=" .$id;

        $conn->exec($sql);


    }
?>