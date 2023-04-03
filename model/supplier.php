<?php
    function getall_s(){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM Supplier");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function getones($id){
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM Supplier WHERE Supplier_ID=".$id);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;

    }

    function add_s($name){
        $conn = connect();
        $sql = "INSERT INTO Supplier(Name) VALUES ('$name')";

        $conn->exec($sql);


    }

    function update_s($id, $name){
        $conn = connect();
        $sql = "UPDATE Supplier SET Name = '$name' WHERE Supplier_ID = ".$id;

        $stmt = $conn->prepare($sql);

        $stmt->execute();

    }

    function delete_s($id){
        $conn = connect();

        $sql = "DELETE FROM Supplier WHERE Supplier_ID=" .$id;

        $conn->exec($sql);


    }
?>