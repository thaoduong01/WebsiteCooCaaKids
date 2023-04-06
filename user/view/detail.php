<?php
     include ('inc/header.php');
     include ('inc/slider.php');
?>
<!-- Product Details Start -->
<?php
    $id = $detail[0]['ID'];
    $name = $detail[0]['Name'];
    $price = $detail[0]['Price'];
    $oldprice = $detail[0]['Old_price'];
    $view = $detail[0]['View'];
    $desc = $detail[0]['Des'];
    $de = $detail[0]['Detail'];
    $img = $detail[0]['Img'];

?>
<section class="product-details">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="product-image">
          <img src="<?=$img?>" alt="<?=$name?>" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <div class="product-info">
          <h1 class="product-title">
            <?php
                if(isset($detail) && count($detail)>0)
                    echo $name;
                else echo "Product details";
            ?>
        </h1>
          <div class="product-price">
            <span class="new-price"><?=$price?> VND</span>
            <span class="old-price"><?=$oldprice?> VND</span>
          </div>
          <p class="product-description"><?=$de?></p>
          <form action="index.php?act=addcart" method="post">
            <div class="product-quantity">
              <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="sl" value="1" min="1" max="50" required="">
            </div>
            <button value="submit" class="btn btn-lg btn-primary rounded-pill mt-3" name="addtocart">Add to cart</button>
            <input type="hidden" value="<?=$id?>" name="id">
            <input type="hidden" value="<?=$name?>" name="name">
            <input type="hidden" value="<?=$price?>" name="price">
            <input type="hidden" value="<?=$img?>" name="img">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Details End -->

<style>
    .product-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 80px 0;
}

.product-details .left {
  flex: 0 0 50%;
  max-width: 50%;
  padding-right: 60px;
  margin-bottom: 40px;
}

.product-details .right {
  flex: 0 0 50%;
  max-width: 50%;
  margin-bottom: 40px;
}

.product-details h1 {
  font-size: 48px;
  font-weight: bold;
  margin-bottom: 30px;
}

.product-details .price {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
}

.product-details .old-price {
  font-size: 24px;
  color: #999;
  text-decoration: line-through;
  margin-right: 20px;
}

.product-details p {
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: 30px;
}

.product-details img {
  max-width: 100%;
  height: auto;
}

.product-details .btn {
  display: inline-block;
  background-color: #ffcc00;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  padding: 15px 40px;
  border: none;
  border-radius: 30px;
  text-transform: uppercase;
  transition: all 0.3s ease;
}

.product-details .btn:hover {
  background-color: #fff;
  color: #ffcc00;
  border: 2px solid #ffcc00;
  cursor: pointer;
}

</style>


<?php
    include('inc/footer.php')
?>