
<?php
     include ('inc/header.php');
     include ('inc/slider.php');
?>


<!-- About Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                <img class="img-fluid w-100" src="images/banner/b6.jpg">
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="display-5 mb-4">Đồ Kids style Hàn Quốc</h1>
            <p class="mb-4">Chào Ba Mẹ ạ! Coocaa Kids thiệt vui vì được đồng hành cùng quá trình khôn lớn của bé yêu nhà mình ^^</p>
            <p><i class="fa fa-check text-primary me-3"></i>Shop có quần áo, váy đầm và phụ kiện em bé size 66-150 style Hàn Quốc.</p>
            <p><i class="fa fa-check text-primary me-3"></i>Tất cả là hàng có sẵn và được nhập trực tiếp từ TQ, không qua trung gian.</p>
            <p><i class="fa fa-check text-primary me-3"></i>Shop cam kết bán hàng chất lượng đẹp như hình ánh shop đăng.</p>
            <p class="mb-4">Mong ba mẹ ủng hộ ạ!</p>
            <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
        </div>
    </div>
</div>
</div>
<!-- About End -->


<!-- Feature Start -->
<!-- <div class="container-fluid bg-light bg-icon my-5 py-6">
<div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-5 mb-3">Our Features</h1>
        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-white text-center h-100 p-4 p-xl-5">
                <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                <h4 class="mb-3">Natural Process</h4>
                <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="bg-white text-center h-100 p-4 p-xl-5">
                <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                <h4 class="mb-3">Organic Products</h4>
                <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="bg-white text-center h-100 p-4 p-xl-5">
                <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                <h4 class="mb-3">Biologically Safe</h4>
                <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
</div> -->
<!-- Feature End -->


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
        <!-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                <li class="nav-item me-2">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn btn-outline-primary border-2" data-bs-toggle="dropdown">Áo</a>
                        <div class="btn btn-outline-primary border-2 dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Áo Khoác, Áo Ấm</a>
                            <a href="feature.html" class="dropdown-item">Hoodie, Sweater</a>
                            <a href="testimonial.html" class="dropdown-item">Áo Len</a>
                            <a href="404.html" class="dropdown-item">Áo Sơ Mi</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item me-2">
                    <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Yếm </a>
                </li>
                <li class="nav-item me-2">
                    <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Quần Dài Jean/Kaki </a>
                </li>
                <li class="nav-item me-0">
                    <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Quần Short, Quần Lửng</a>
                </li>
            </ul>
        </div> -->
    </div>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <?php
                    showpro($sphome1);
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

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>