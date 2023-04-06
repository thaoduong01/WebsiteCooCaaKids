<?php
    // if(is_array($detail))
    //     echo 'Product does not exist!!!';
    // else{
?>

<?php
     include ('inc/header.php');
     include ('inc/slider.php');
?>


<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
<div class="container">
    <div class="row g-5 align-items-center">
        <?php
            $id = $detail['ID'];
            $name = $detail['Name'];
            $price = $detail['Price'];
            $oldprice = $detail['Old_price'];
            $view = $detail['View'];
            $desc = $detail['Des'];
            $de = $detail['Detail'];
            $img = $detail['Img'];

        ?>
        <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-5 text-white mb-3"><?=$name?></h1>
            <p class="text-white mb-0"><?=$price?> VND</p>
            <p class="text-white mb-0"><?=$de?></p>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="<?=$img?>" alt="">
                </div>
                <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href=""><?=$name?></a>
                    <span class="text-primary me-1"><?=$price?> VND</span>
                    <span class="text-body text-decoration-line-through"><?=$oldprice?> VND</span>
                </div>

                <input type="hidden" value = "<?=$img?>" name ="img" >
                <input type="hidden" value = "<?=$name?>" name ="name" >
                <input type="hidden" value = "<?=$price?>" name ="price" >
                <input type="hidden" value = "<?=$id?>" name ="id" >

                <!-- <div class="d-flex border-top">
                    <small class="w-50 text-center py-2">
                        <input type="number" value="1" min="1" max="50" required=""/> |
                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                    </small>
                </div> -->

                
                <form action="index.php?act=addcart" method="post">
                    <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                        <input type="number" value="1" min="1" max="50" required="" name="sl"/> | 
                        <button value="submit" class="btn btn-lg btn-secondary rounded-pill py-3 px-5" name="addtocart">Add to cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Firm Visit End -->



<?php
    include('inc/footer.php')
?>
<?php ?>