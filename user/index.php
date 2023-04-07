<?php
    session_start();
    ob_start();

    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = array();
    
    // include ('inc/header.php');
    // include ('inc/slider.php');

    include "../model/connect.php";
    include "../model/user.php";
    include "../model/category.php";
    include "../model/product.php";
    include "../model/order.php";

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
                        $_SESSION['username'] = $kq[0]['Username'];
                        header('Location: index.php');
                    }
            
                }
               
            case 'signin':
                include "login.php";
                break;

            case 'logout':
                unset($_SESSION['Role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('Location: login.php');


            case 'search':
                if(isset($_POST['search'])){
                    $nd = $_POST['nd'];
                }else $nd = false;

                $result = getall($nd);

                include "index.php";
                break;


            case 'product':
                if(isset($_GET['Category_ID']) && ($_GET['Category_ID'])){
                    $idcat = $_GET['Category_ID'];
                }

                $list = getall($idcat, "");
                include "view/product.php";
                break;

            case 'detail':
               if(isset($_GET['ID']) && ($_GET['ID'] > 0)){
                    $id = $_GET['ID'];
                    $detail = getpro($id);
               }

                include "view/detail.php";
                break;
            
            case 'order':
                if(isset($_POST['dathang']) && ($_POST['dathang'])){
                    //list
                    $total = $_POST['total'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                
                    $madh ="DONHANG".rand(0,999999);
                
                    //tao don hang 
                    //tra ve 1 id don hang
                    $iddh = taodonhang($madh, $total, $pttt, $name, $address, $email, $phone);
                    
                    // Truyền biến vào view
                    loadView('order_detail', compact('madh', 'total', 'pttt', 'name', 'address', 'email', 'phone'));
                }
                
                include "view/order_detail.php";
                break;

            case 'addcart':
                //lấy dữ liệu từ form lưu vào giỏ hàng

                 //chatgpt
                
                 if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $img = $_POST['img'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $id = $_POST['id'];
                
                    if(isset($_POST['sl']) && ($_POST['sl'] > 0)){
                        $sl = $_POST['sl'];
                    }else{
                        $sl = 1;
                    }
                
                    //kiem tra san pham co ton tai trong gio hang khong?
                    //neu co chi cap nhat so luong
                    $i = 0;
                    $found = false;
                    foreach($_SESSION['giohang'] as &$item){ //Lưu ý rằng, cách truy cập mảng trong vòng lặp foreach được sử dụng để thay đổi giá trị của mảng. Cần sử dụng &$item để truyền tham chiếu thay vì giá trị.
                        if($item[1] === $name){
                            $slmoi = $sl + $item[4];
                            $item[4] = $slmoi;
                            $found = true;
                            break;
                        }
                        $i++;
                    }
                
                    // khởi tạo mảng con trước khi đưa vào giỏ hàng
                    if(!$found){
                        $item = array($img, $name, $price, $id, $sl);
                        array_push($_SESSION['giohang'], $item);
                    }
                
                    header('location: viewcart.php');
                }

                // if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                //     $img = $_POST['img'];
                //     $name = $_POST['name'];
                //     $price = $_POST['price'];
                //     $id = $_POST['id'];

                //     if(isset($_POST['sl'])&&($_POST['sl']>0)){
                //         $sl = $_POST['sl'];
                //     }else{
                //         $sl = 1;
                //     }
                //     $fg=0;
                //     //kiem tra san pham co ton tai trong gio hang khong?
                //     //neu co chi cap nhat so luong
                //     $i=0;
                //     foreach($_SESSION['giohang'] as $item){
                //         if($item[1]===$name){
                //             $slmoi = $sl+$item[4];
                //             $_SESSION['giohang'][$i][4]+=$slmoi; 
                //             $fg=1;
                //             break;
                //         }
                //     }

                //    // khỏi tạo 1 mảng con trước khi đưa vào giỏ hàng
                //     if($fg==0){
                //         $item = array($img, $name, $price, $id, $sl);
                //         $_SESSION['giohang']=$item;
                //         // array_push($_SESSION['giohang'], $item);
                //     }
                //     header('location: viewcart.php');
                // }

    


                // if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                //     $img = $_POST['img'];
                //     $name = $_POST['name'];
                //     $price = $_POST['price'];
                //     $id = $_POST['id'];
                
                //     // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
                //     if(isset($_SESSION['giohang'][$id])) {
                //         $_SESSION['giohang'][$id][4]++;
                //     } else {
                //         $sl = 1;
                //         $item = array($img, $name, $price, $id, $sl);
                //         $_SESSION['giohang'][$id] = $item;
                //     }
                
                //     header('location: viewcart.php');
                // }

                
                //view giỏ hàng
                // include "viewcart.php";
                break;

            case 'delcart':
                if(isset($_GET['i']) && ($_GET['i']) > 0){
                    array_splice( $_SESSION['giohang'], $_GET['i'],1);
                }else{
                    if(isset($_SESSION['giohang'])) 
                        unset($_SESSION['giohang']);
                }

                if(isset($_SESSION['giohang']) && (count($_SESSION['giohang'])>0))
                    header('location: viewcart.php');
                else
                    header('location: index.php');
                
                // include "view/viewcart.php";
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