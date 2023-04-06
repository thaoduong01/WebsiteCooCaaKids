<?php
     include ('inc/header.php');
     include ('inc/slider.php');
?>

<div class="cart-container">
  <h2>Giỏ hàng</h2>
  <table>
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <!-- Thêm các sản phẩm vào đây -->
    </tbody>
  </table>
  <div class="cart-summary">
    <p>Tổng số sản phẩm: <span id="total-items"></span></p>
    <p>Tổng giá trị: <span id="total-price"></span></p>
    <button id="checkout-btn">Thanh toán</button>
  </div>
</div>

<?php
    include('inc/footer.php')
?>
<style>
    .cart-container {
  max-width: 800px;
  margin: 0 auto;
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
  background-color: #4CAF50;
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
  background-color: #3e8e41;
}

</style>