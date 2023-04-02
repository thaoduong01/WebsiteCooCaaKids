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

                    $role = $kq[0]['Role'];
                    if($role == 1){
                        $_SESSION['Role'] = $role;
                        header('Location: ../admin/admin.php');
                    }else{
                        $_SESSION['Role'] = $role;
                        $_SESSION['iduser'] = $kq[0]['ID'];
                        $_SESSION['user'] = $kq[0]['username'];
                        header('Location: index.php');
                    }
            
                }
               
            case 'signin':
                include "view/signin.php";
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
            
            default:
                include "home.php";
                break;

        }
   }else{
        include "home.php";
       
   }

    // include('inc/footer.php')
?>