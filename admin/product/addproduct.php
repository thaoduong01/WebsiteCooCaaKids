<?php
    ob_start();
    
    include('./model/connect.php');
    include('./model/product.php');

    if((isset($_POST['themmoi'])) && ($_POST['themmoi'])){
        $idcat = $_POST['Category_ID'];
        $name = $_POST['Name'];
        $price = $_POST['Price'];

        if($_FILES['img']['name']!="") $Img=$_FILES['img']['name']; 
        else $hinh="";

        insert_product($idcat, $name, $price, $Img);
    }

    header('Location: admin.php?act=product')
?>