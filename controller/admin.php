<?php
     session_start();
     ob_start();


     if(isset($_SESSION['Role'])&& ($_SESSION['Role']==0)){

     include "../model/connect.php";
     include "../model/category.php";
     include "../model/product.php";

     // connect();

     include "../admin/inc/header.php";

     if(isset($_GET['act'])){
          $act = $_GET['act'];
          switch($act){
               case 'categories':

                    $kq = getall_c();
                    include "../admin/category/categories.php";
                    break;
               
               case 'updatecat':
                    //lay 1 record dung id truyen
                    if(isset($_GET['Category_ID'])){
                         $id = $_GET['Category_ID'];
                         $kq1 = getonecat($id);
                    }
                    //lay list cat
                    $kq = getall_c();
                    include "../admin/category/update_c.php";
                    break;

               case 'addcat':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                         $c_name = $_POST['c_name'];
                         addcat($c_name);
                    }
                    $kq = getall_c();
                    include "../admin/category/categories.php";
                    break;

               case 'delccat':
                    if(isset($_GET['Category_ID'])){
                         $id = $_GET['Category_ID'];
                         delete_c($id);
                    }
                    $kq = getall_c();
                    include "../admin/category/categories.php";
                    break;

               case 'product':
                    //kiem tra xem nguoi dung co click vao nut add ko
                    $listcat = getall_c();

                    $kq = getall_p();
                    include "../admin/product/product.php";
                    break;
               
               case 'addproduct':
                    if((isset($_POST['themmoi'])) && ($_POST['themmoi'])){
                         $idcat = $_POST['Category_ID'];
                         $name = $_POST['Name'];
                         $price = $_POST['Price'];

                         $target_dir = "../upload";
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
                         // else $hinh="";
                    
                         insert_product($idcat, $name, $price, $Img);
                    }
                    $listcat = getall_c();

                    $kq = getall_p();

                    include "../admin/product/product.php";
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
                    include "../admin/index.php";
                    break;

          }
     }else{
          include "../admin/index.php";
     }

     include "../admin/inc/footer.php";

}else{
     header('Location: login1.php');
}

?>