<?php
     session_start();
     ob_start();


     if(isset($_SESSION['Role'])&& ($_SESSION['Role']==0)){

     include "../model/connect.php";
     include "../model/category.php";
     include "../model/product.php";

     // connect();

     if(isset($_GET['act'])){
          $act = $_GET['act'];
          switch($act){
               //category

               case 'categories':
                    //list
                    $kq = getall_c();
                    include "category/categories.php";
                    break;
               
               case 'updatecat':
                    //lay 1 record dung id truyen
                    if(isset($_GET['Category_ID'])){
                         $id = $_GET['Category_ID'];
                         $kq1 = getonecat($id);
     
                         $kq = getall_c();
                         include "category/updatecat.php";
                    }
     
                    if(isset($_POST['edit'])){
                         $id = $_POST['id'];
                         $c_name = $_POST['c_name'];
     
                         updatecat($id,$c_name);
     
                         $kq = getall_c();
                         include "category/categories.php";
                     }
                    
                    break;

               case 'addcat':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                              $c_name = $_POST['c_name'];
                              addcat($c_name);
                    }
     
                    $thongbao = "Thêm danh mục thành công!";
                    $error = "Thêm danh mục không thành công!";
     
                    $kq = getall_c();
                    include "category/categories.php";
                    break;

               case 'delcat':
                    if(isset($_GET['Category_ID'])){
                         $id = $_GET['Category_ID'];
                         delete_c($id);
                    }
                    $kq = getall_c();
                    include "category/categories.php";
                    break;

               //product

               case 'product':
                    
                    $listcat = getall_c();

                    $kq = getall_p();
                    include "product/product.php";
                    break;

               case 'delete':
                    if(isset($_GET['ID'])){
                              $id = $_GET['ID'];
                              delete($id);
                    }
                    $listcat = getall_c();
     
                    $kq = getall_p();
                    include "product/product.php";
                    break;
               
               case 'addproduct':
                    if((isset($_POST['add'])) && ($_POST['add'])){
                         $name = $_POST['name'];
                         $idcat = $_POST['idcat'];
                         $price = $_POST['price'];
     
                         $target_dir = "../uploaded/";
     
                         if (is_dir($target_dir)) {
                         echo "Đã truy cập thành công tới thư mục $target_dir";
                         } else {
                         echo "Không truy cập được tới thư mục $target_dir";
                         }
     
                         $target_file = $target_dir . basename($_FILES["img"]["name"]);
                         $img = $target_file;
                         $uploadOk = 1; //upload dc
     
                         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
                         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                         && $imageFileType != "gif" ) {
                              // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                              $uploadOk = 0; //ko upload
                         }
     
                         move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
     
                         // if($_FILES['img']['name']!="") $Img=$_FILES['img']['name']; 
                         // else $Img="";
                    
                         insert_product($name, $idcat, $price, $img);
                    }
                    $listcat = getall_c();

                    $kq = getall_p();

                    include "product/product.php";
                    break;

               case 'login':
                    if(isset($_POST['login']) && ($_POST['login'])){
                         $username = $_POST['Username'];
                         $pass = $_POST['Password'];
                    }

               case 'logout':
                    unset($_SESSION['Role']);
                    header('Location: login1.php');
               
               default:
                    include "index.php";
                    break;

          }
     }else{
          include "index.php";
         
     }

     include "inc/footer.php";

}else{
     header('Location: login1.php');
}

?>