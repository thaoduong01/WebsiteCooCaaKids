<?php
    session_start();
    ob_start();

    // include ('inc/header.php');
    // include ('inc/slider.php');

    include "../model/connect.php";
    include "../model/user.php";
    include "../model/category.php";
    include "../model/product.php";

    $listcat = getall_c();
    $sphome1 = getall(0, "");
   

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
             //category

             case 'signup':
                include "view/signup.php";
                break;

            case 'login':
                if(isset($_POST['login']) && ($_POST['login'])){
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];

                    $kq = getuserinfo($username, $pass);

                    // if($kq){
                    //     $_SESSION['username'] = $kq['Username'];
                    //     $_SESSION['id'] = $kq['ID'];
                    //     if($kq['Role'] == 1) {
                    //         header('Location: ../admin/admin.php');
                    //     }
                    //     header('Location: index.php');
                    // }else{
                    //     $txt_error = "Username or Pass khong ton tai";
                    // }

                    $role = $kq[0]['Role'];
                    if($role == 1){
                        $_SESSION['Role'] = $role;
                        header('Location: ../admin/admin.php');
                    }else{
                        $_SESSION['Role'] = $role;
                        $_SESSION['iduser'] = $kq[0]['ID'];
                        $_SESSION['user'] = $kq[0]['Username'];
                        header('Location: index.php');
                    }
            
                }
               
            case 'signin':
                include "view/login.php";
                break;

            case 'logout':
                unset($_SESSION['Role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('Location: login.php');

            case 'product':
                if(isset($_GET['Category_ID']) && ($_GET['Category_ID'])){
                    $idcat = $_GET['Category_ID'];
                }

                $list = getall($idcat, "");
                include "view/product.php";
                break;

            case 'detail':
               if(isset($_GET['ID']) && ($_GET['ID'] > 0)){
                    $detail = showdetail($id);
               }

                include "view/product_detail.php";
                break;

            case 'viewcart':


            
            default:
                include "home.php";
                break;

        }
   }else{
        include "home.php";
       
   }

    // include('inc/footer.php')
?>