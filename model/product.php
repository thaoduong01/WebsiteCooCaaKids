<?php
    function getall_p(){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM Product");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function getid($id){
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM Product WHERE ID =".$id);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;

    }

    function insert_product($name, $idcat, $price, $img){
        $conn = connect();
    
        if(empty($img)){  // kiểm tra nếu không có hình ảnh
            $sql = "INSERT INTO Product(Name, Category_ID, Price) VALUES ('$name', $idcat, $price)";
        } else {
            $sql = "INSERT INTO Product(Name, Category_ID, Price, Img) VALUES ('$name', $idcat, $price, '$img')";
        }
    
        $stmt = $conn->prepare($sql);
    
        $stmt->execute();
    }

    function update($id, $name, $price, $img, $idcat){
        $conn = connect();
        
        if($img==""){
            $sql = "UPDATE Product SET Name = '$name', Price = '$price', Category_ID = '$idcat' WHERE ID = ".$id;
        }else{
            $sql = "UPDATE Product SET Name = '$name', Price = '$price', Category_ID = '$idcat', Img = '$img' WHERE ID = ".$id;
        }
    
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $thongbao = "Cập nhật danh mục thành công!";
        } catch (PDOException $e) {
            $thongbao = "Cập nhật danh mục không thành công. Lỗi: " . $e->getMessage();
        }
    
        return $thongbao;
    }

    function delete($id){
        $conn = connect();

        $sql = "DELETE FROM Product WHERE ID=" .$id;

        $conn->exec($sql);


    }
?>