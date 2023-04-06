
<?php
     include ('inc/header.php');
     include ('inc/slider.php');
?>


<h2><?php echo $idcat;?></h2>


<!-- Product Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="row g-0 gx-5 align-items-end">
        <div class="col-lg-6">
            <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Products</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <?php
                        showpro($list);
                    // foreach($list as $product){
                    //     if($product['Price'] == 0){
                    //         $price = "Updating";
                    //     }else{
                    //         if($product['Old_price']>0)
                    //         $price = ' <span class="text-primary me-1">'.$product['Price'].' VND</span>
                    //                 <span class="text-body text-decoration-line-through">'.$product['Old_price'].'</span>';
                    //         // $price = '<del>'.$product['Old_price'].'VND</del>'.$product['Price'].'VND';
                    //         else $price = $product['Price'].'VND';
                    //     }
                       
                        
                        // echo '<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        //         <div class="product-item">
                        //             <div class="position-relative bg-light overflow-hidden">
                        //                 <img class="img-fluid w-100" src="../uploaded/'.$product['Img'].'" alt="">
                        //                 <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                        //             </div>
                        //             <div class="text-center p-4">
                        //                 <a class="d-block h5 mb-2" href="">'.$product['Name'].'</a>
                        //                 <span class="text-primary me-1">'.$price.' VND</span>
                        //                 <span class="text-body text-decoration-line-through">'.$product['Old_price'].'</span>
                        //             </div>
                        //             <div class="d-flex border-top">
                        //                 <small class="w-50 text-center border-end py-2">
                        //                     <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                        //                 </small>
                        //                 <small class="w-50 text-center py-2">
                        //                     <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                        //                 </small>
                        //             </div>
                        //         </div>
                        //     </div>
                    //         ';
                    // }
                ?>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
<!-- Product End -->


<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
<div class="container">
    <div class="row g-5 align-items-center">
        <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
            <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
        </div>
        <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
            <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
        </div>
    </div>
</div>
</div>
<!-- Firm Visit End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6 mb-5">
<div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-5 mb-3">Customer Review</h1>
        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        <div class="testimonial-item position-relative bg-white p-5 mt-4">
            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                <div class="ms-3">
                    <h5 class="mb-1">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
        <div class="testimonial-item position-relative bg-white p-5 mt-4">
            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
                <div class="ms-3">
                    <h5 class="mb-1">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
        <div class="testimonial-item position-relative bg-white p-5 mt-4">
            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                <div class="ms-3">
                    <h5 class="mb-1">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
        <div class="testimonial-item position-relative bg-white p-5 mt-4">
            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
                <div class="ms-3">
                    <h5 class="mb-1">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-5 mb-3">Latest Blog</h1>
        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid" src="img/blog-1.jpg" alt="">
            <div class="bg-light p-4">
                <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                <div class="text-muted border-top pt-4">
                    <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                    <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-fluid" src="img/blog-2.jpg" alt="">
            <div class="bg-light p-4">
                <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                <div class="text-muted border-top pt-4">
                    <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                    <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid" src="img/blog-3.jpg" alt="">
            <div class="bg-light p-4">
                <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                <div class="text-muted border-top pt-4">
                    <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                    <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Blog End -->


<?php
    include('inc/footer.php')
?>
