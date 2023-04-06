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
               //CATEGORY

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

               //SUPPLIER

               case 'supplier':
                    //list
                    $kq = getall_s();
                    include "supplier/list_s.php";
                    break;
               
               case 'update_s':
                    //lay 1 record dung id truyen
                    if(isset($_GET['Supplier_ID'])){
                         $id = $_GET['Supplier_ID'];
                         $kq1 = getones($id);
     
                         $kq = getall_s();
                         include "supplier/update_s.php";
                    }
     
                    if(isset($_POST['edit'])){
                         $id = $_POST['id'];
                         $name = $_POST['name'];
     
                         updatecat($id,$name);
     
                         $kq = getall_s();
                         include "supplier/list_s.php";
                         }
                    
                    break;

               case 'add_s':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                              $name = $_POST['name'];
                              addcat($name);
                    }
     
                    $thongbao = "Thêm danh mục thành công!";
                    $error = "Thêm danh mục không thành công!";
     
                    $kq = getall_s();
                    include "supplier/list_s.php";
                    break;

               case 'del_s':
                    if(isset($_GET['Supplier_ID'])){
                         $id = $_GET['Supplier_ID'];
                         delete_c($id);
                    }
                    $kq = getall_s();
                    include "supplier/list_s.php";
                    break;

               //PRODUCT

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
                         $sp = getpro($_GET['ID']);
     
                         $listcat = getall_c();
                         $kq = getall_p();
     
                         include "product/update.php";
                    }
     
                    if(isset($_POST['edit']) && ($_POST['edit'])){
                         $name = $_POST['name'];
                         $idcat = $_POST['idcat'];
                         $price = $_POST['price'];
                         $id = $_POST['id'];
     
                         if(isset($_POST['add']) && $_POST['add'] == 'ADD') {
                              $name = $_POST['name'];
                              $idcat = $_POST['idcat'];
                              $price = $_POST['price'];
                           
                              if($_FILES['img']['name'] != ""){
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

                                   if($uploadOk == 1)
                                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                                   // if($uploadOk == 0) {
                                   // echo "Sorry, your file was not uploaded.";
                                   // } else {
                                   // if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                   //      echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                                   // } else {
                                   //      echo "Sorry, there was an error uploading your file.";
                                   // }
                              
                                   // update($id, $name, $price, $img, $idcat);
                                   // }
                              }else{
                                   $img = "";
                              }

                              
                         }
                         
                         update($id, $name, $price, $img, $idcat);
                         $kq = getall_p();
                         include "product/product.php";
                    }
     
                    
                    break;

               case 'logout':
                    if(isset($_SESSION['Role'])){
                         unset($_SESSION['Role']);
                         // unset($_SESSION['iduser']);
                         // unset($_SESSION['username']);
                    }
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
     header('Location: login.php');
}

?>