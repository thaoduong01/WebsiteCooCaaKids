<?php
     session_start();
     ob_start();
     include ('inc/header.php');
     include ('inc/slider.php');
?>
<h2>Thanks</h2>
<div class="cart-container">
    <h2>ID Order: <?=$iddh?></h2>
    <?php
    //  if(isset($_SESSION['giohang']))
    //     echo var_dump($_SESSION['giohang']);
    ?>
  <h2>Giỏ hàng</h2>
 <?php
    if((isset($_SESSION['giohang'])) && (is_array($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)){
        echo '<table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>';
            
                $i = 1;
                foreach($_SESSION['giohang'] as $item){
                    if(is_array($item) && count($item) >= 1) {
                        // $tt = $item[3] * $item[4];
                        $tt = str_repeat($item[2], $item[4]);
                        $tong += $tt;
                        echo '<tbody>
                                <td>'.($i+1).'</td>
                                <td>'.$item[1].'</td>
                                <td>'.$item[2].'</td>
                                <td>'.$item[0].'</td>
                                <td>'.$item[4].'</td>
                                <td>'.$tt.'</td>
                            </tbody>';
                        $i++;
                    }
                }
            
                echo '</table>';
            echo ' <div class="cart-summary">
                        <p>Tổng số sản phẩm: <span id="total-items">'.$i.'</span></p>
                        <p>Tổng giá trị: <span id="total-price">'.$tong.' VN</span></p> 
                        <a href="index.php"><button id="checkout-btn">Tiếp</button></a>
                    </div>';
           
    }
    ?>


  <h2>Thông tin đặt hàng</h2>
      <input type="hidden" name="total" value="<?=$tong?>"/>
      <label for="name">Họ tên:</label>
      <input type="text" id="name" name="name" required><br>
    
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
    
      <label for="phone">Số điện thoại:</label>
      <input type="tel" id="phone" name="phone" required><br>
    
      <label for="address">Địa chỉ:</label>
      <textarea id="address" name="address" required></textarea><br>
    
      <label for="note">Ghi chú:</label>
      <textarea id="note" name="note"></textarea><br>  

</div>


<?php
    include('inc/footer.php')
?>
<style>
    .cart-container {
  max-width: 800px;
  /* margin: 0 auto; */
  padding: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

.cart-summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

#checkout-btn {
  background-color: orange;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  cursor: pointer;
}

#checkout-btn:hover {
  background-color: orangered;
}

form {
  margin-top: 30px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
  font-size: 16px;
}

textarea {
  height: 100px;
}

#place-order-btn {
  background-color: orange;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  cursor: pointer;
  border-radius: 5px;
}

#place-order-btn:hover {
  background-color: #ff8c1a;
}

</style>