<?php
     include "../model/connect.php";
     include "../model/database.php";


     if(isset($_GET['act'])){
          $act = $_GET['act'];
          switch($act){
               case 'categories':
                    $sql = "SELECT * FROM Category ORDER BY Name";
                    $list_c = pdo_query($sql);
                    include "category/categories.php";
                    break;

               case 'addcategories':
                    //kiem tra xem nguoi dung co click vao nut add ko
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                         $c_name = $_POST['c_name'];

                         $sql = "INSERT INTO Category(Name) VALUES ('$c_name')";
                         pdo_execute($sql);

                         $thongbao = "Create successfull!!";
                         $error = "Fail!!!";
                    }
                    include "category/addcategories.php";
                    break;

               case 'product':
                    //kiem tra xem nguoi dung co click vao nut add ko

                    include "product/product.php";
                    break;

               
               default:
                    include "index.php";
                    break;

          }
     }else{
          include "index.php";
     }

?>