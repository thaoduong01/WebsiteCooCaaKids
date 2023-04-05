<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
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
                include "signup.php";
                break;

            case 'login':
                if(isset($_POST['login']) && ($_POST['login'])){
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];

                    $kq = getuserinfo($username, $pass);

                    if($kq){
                        $_SESSION['username'] = $kq['Username'];
                        $_SESSION['id'] = $kq['ID'];
                        if($kq['Role'] == 1) {
                            header('Location: ../admin/admin.php');
                        }
                        header('Location: index.php');
                    }else{
                        $txt_error = "Username or Pass khong ton tai";
                    }

                    // $role = $kq[0]['Role'];
                    // if($role == 1){
                    //     $_SESSION['Role'] = $role;
                    //     header('Location: ../admin/admin.php');
                    // }else{
                    //     $_SESSION['Role'] = $role;
                    //     $_SESSION['iduser'] = $kq[0]['ID'];
                    //     $_SESSION['user'] = $kq[0]['Username'];
                    //     header('Location: index.php');
                    // }
            
                }
               
            case 'signin':
                include "login.php";
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
                
                
                case 'addcart':
                    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                            $id = $_POST['ID'];
                            $tensp = $_POST['Name'];
                            $img = $_POST['Img'];
                            $gia = $_POST['Price'];
                            
                            // tồn tại thêm số lượng 
                            if(isset($_POST['sl'])&&($_POST['addtocart'])){
                                $sl=$_POST['sl'];
                            }else{
                                $sl=1;
                            }
                            $fg = 0; // Nếu cờ này =0 thì $sl không thay đổi
                            // Kiểm tra sản phẩm có tồn tại trong giỏ hàng không?
                            // Nếu có chỉ cập nhật số lượng
                            $i = 0;
                            foreach ($_SESSION['giohang'] as $item) {
                                if ($item[1] === $tensp) {
                                    $slmoi = $sl + $item[4];
                                    $_SESSION['giohang'][$i][4] = $slmoi;
                                    $fg = 1;
                                    break;
                                }
                                $i++;
                            }
                            // Khởi tạo 1 mảng con trước khi đưa vào giỏ hàng
                            if ($fg == 0) {
                                $item = array($id, $tensp, $img, $gia, $sl);
                                $_SESSION['giohang'][] = ($item);
                            }
                            header('Location: index.php?act=viewcart');
                        } else {
                            include 'view/viewcart.php';
                        }
                        break;
                    
            
                
                

            case 'delcart':
                if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                header('location: index.php?act=viewcart');
                break;
                
                include "viewcart.php";
                break;    

                
            case 'detail':
               if(isset($_GET['ID']) && ($_GET['ID'] > 0)){
                    $detail = showdetail($detail);
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
