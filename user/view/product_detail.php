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
        <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
            <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
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
                <div class="d-flex border-top">
                    <small class="w-50 text-center py-2">
                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                    </small>
                </div>
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