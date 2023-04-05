  <!---->
  <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">View cart</li>
    </ol>
    <!---->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3 class="tittle text-center">View Cart</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content">
                    <!-- left -->
                    <?php
                        //echo var_dump($_SESSION['giohang'])
                        // Kiểm tra giỏ hàng có tồn tại không
                    if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                        echo '<table>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                                </tr>';
                        $i = 1;
                        foreach($_SESSION['giohang'] as $item) {
                            $tt = $item[3] * $item[4];
                            echo '<tr>
                                    <td>' . $i . '</td>
                                    <td>' . $item[1] . '</td>
                                    <td>' . $item[2] . '</td>
                                    <td>' . $item[3] . '</td>
                                    <td>' . $item[4] . '</td>
                                    <td>' . $tt . '</td>
                                    <td><a href="">Xóa</a></td>
                                </tr>';
                            $i++;
                        }
                        echo '</table>';
                    } else {
                        echo 'Giỏ hàng của bạn đang trống';
                    }
                    ?>
                    <br>
                    <a href="#">Tiếp tục mua hàng</a>| <a href="index.php?act=delcart">Xóa giỏ hàng</a>| <a href="#">thanh toán</a>| 
                </div>
                <div class="col-md-6 contact-left-content">
                    <!-- right -->

                </div>

            </div>
        </div>
    </section>