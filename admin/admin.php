<?php
     if(isset($_GET['act'])){
          $act = $_GET['act'];
          switch($act){
               case 'product':
                    include "product/product.php";
                    break;

               case 'categories':
                    include "category/categories.php";
                    break;
               default:
                    include "index.php";
                    break;

          }
     }else{
          include "index.php";
     }

?>