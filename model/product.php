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


    function getall($idcat = 0, $key = ""){
        $conn = connect();
        
        $sql ="SELECT * FROM Product WHERE 1";
        if($idcat > 0) 
            $sql.=" AND Category_ID=" .$idcat;
        if($key != "")
            $sql.=" AND Name LIKE '%".$key."%'";
        $sql.=" ORDER BY ID DESC";

        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca
        return $kq;
    }

    function showpro($listpro){
        foreach($listpro as $product){
            if($product['Price'] == 0){
                $price = "Updating";
            }else{
                if($product['Old_price']>0)
                $price = ' <span class="text-primary me-1">'.$product['Price'].' VND</span>
                        <span class="text-body text-decoration-line-through">'.$product['Old_price'].'VND</span>';
                // $price = '<del>'.$product['Old_price'].'VND</del>'.$product['Price'].'VND';
                else $price = $product['Price'].'VND';
            }
           
            
            echo '<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                    <form action="index.php?act=addtocart" method = "post">
                        <div class="position-relative bg-light overflow-hidden">
                            <a href="index.php?act="product_detail.php&id='.$product['ID'].'">
                            <img class="img-fluid w-100" src="../uploaded/'.$product['Img'].'" alt="">
                            </a>
                            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        </div>
                        <div class="text-center p-4">
                        <a href="index.php?act="product_detail.php&id='.$product['ID'].'">'.$product['Name'].'</a>
                            <span class="text-primary me-1">'.$price.'</span>
                        </div>
                        <div class="d-flex border-top">
                            <small class="w-50 text-center border-end py-2">
                                <a class="text-body" href="index.php?act=detail&ID='.$product['ID'].'"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                            </small>
                            <small class="w-50 text-center py-2"/>
                                <a class="text-body" href="index.php?act=addcart"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                            </small>
                            <div>
                           
                            </div>
                        </div>
                            <input type="hidden" value"'.$product['ID'].'" name ="id" >
                            <input type="hidden" value"'.$product['Name'].'" name ="nsme" >
                            <input type="hidden" value"'.$product['Img'].'" name ="img" >
                            <input type="hidden" value"'.$product['Price'].'" name ="price" >
                        </form>
                    </div>
                </div>
                ';
        }
    }

    function showdetail($id){
        $conn = connect();
        
        $sql ="SELECT * FROM Product WHERE 1";
        if($id > 0) $sql.=" AND ID=".$id; 
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetch(); //lay 1
        return $kq;
    }
?>