<?php
     session_start();
     ob_start();


     if(isset($_SESSION['Role'])&& ($_SESSION['Role']==1)){

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
                    if(isset($_POST['add']) && $_POST['add'] == 'ADD') {
                         $name = $_POST['name'];
                         $idcat = $_POST['idcat'];
                         $price = $_POST['price'];
                      
                         $target_dir = "../uploaded/";
                         if(!file_exists($target_dir)) {
                            mkdir($target_dir);
                         }
                      
                         $target_file = $target_dir . basename($_FILES["img"]["name"]);
                         $img = $target_file;
                         $uploadOk = 1;
                      
                         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      
                         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                            $uploadOk = 0;
                         }
                      
                         if($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                         } else {
                            if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                               echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                            } else {
                               echo "Sorry, there was an error uploading your file.";
                            }
                      
                            insert_product($name, $idcat, $price, $img);
                         }
                      }
                      
                    // if((isset($_POST['add'])) && ($_POST['add'])){
                    //      $name = $_POST['name'];
                    //      $idcat = $_POST['idcat'];
                    //      $price = $_POST['price'];
     
                    //      $target_dir = "../uploaded/";
     
                    //      if (is_dir($target_dir)) {
                    //      echo "Đã truy cập thành công tới thư mục $target_dir";
                    //      } else {
                    //      echo "Không truy cập được tới thư mục $target_dir";
                    //      }
     
                    //      $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    //      $img = $target_file;
                    //      $uploadOk = 1; //upload dc
     
                    //      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
                    //      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    //      && $imageFileType != "gif" ) {
                    //           // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    //           $uploadOk = 0; //ko upload
                    //      }
     
                    //      if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                    //           echo "Upload img successfully!";
                    //      }else{
                    //           echo "Upload img failed!";
                    //      }
     
                    //      // if($_FILES['img']['name']!="") $Img=$_FILES['img']['name']; 
                    //      // else $Img="";
                    
                    //      insert_product($name, $idcat, $price, $img);
                    // }
                    $listcat = getall_c();

                    $kq = getall_p();

                    include "product/product.php";
                    break;


               case 'update':

                    //sp theo getid
                    if(isset($_GET['ID']) && ($_GET['ID']>0)){
                         $sp = getid($_GET['ID']);
     
                         $listcat = getall_c();
                         $kq = getall_p();
     
                         include "product/update.php";
                    }
     
                    if(isset($_POST['edit']) && ($_POST['edit'])){
                         $name = $_POST['name'];
                         $idcat = $_POST['idcat'];
                         $price = $_POST['price'];
                         $id = $_POST['id'];
     
                         if($_FILE['img']['name']){
                              //tao thu muc de chua anh
                              $target_dir = "../uploaded/";
     
                              //tao duong dan file sau khi upload len he thong
                              $target_file = $target_dir.basename($_FILES["img"]["name"]);
                              $img = $target_file;
                              $uploadOk = 1; //upload dc
     
                              //Kiem tra dieu kien upload
                                   //kiem tra kich thuoc(5MB <=> 5242880 bytes)
                              
                              if($_FILES['img']['size'] > 5242880){
                                   $error['img'] = ['Kich thuoc lon hon 5mb'];
                              }
     
                                   //kiem tra file da ton tai
                              // print_r($error);
                              if(file_exists($target_file))
                                   $error['img'] = "Da ton tai";
     
                              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
                              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                              && $imageFileType != "gif" ) {
                                   //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                   $uploadOk = 0; //ko upload
                         }
     
                         //kiem tra va chuyen file tu bo nho tam len server
                         if($uploadOk==1){
                              if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                                   echo "Upload img successfully!";
                              }else{
                                   echo "Upload img failed!";
                              }
                              }else $img="";
     
                         }
     
                         update($id, $name, $price, $img, $idcat);
     
                         $kq = getall_p();
                         include "product/product.php";
                    }
     
                    
                    break;

               // case 'login':
               //      if(isset($_POST['login']) && ($_POST['login'])){
               //           $username = $_POST['Username'];
               //           $pass = $_POST['Password'];
               //      }

               case 'logout':
                    if(isset($_SESSION['Role']))
                         unset($_SESSION['Role']);
                    header('Location: login.php');
               
               default:
                    include "index.php";
                    break;

          }
     }else{
          include "index.php";
         
     }

     include "inc/footer.php";

}else{
     header('Location: signin.php');
}

?>