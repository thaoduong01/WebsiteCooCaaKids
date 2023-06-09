<?php
        include ('inc/header.php');
    ?>

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
								<button class="au-btn--submit" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
							<div class="header-button">
								<div class="noti-wrap">
									<div class="noti__item js-item-menu">
										<i class="zmdi zmdi-comment-more"></i>
										<span class="quantity">1</span>
										<div class="mess-dropdown js-dropdown">
											<div class="mess__title">
												<p>You have 2 news message</p>
											</div>
											<div class="mess__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
												</div>
												<div class="content">
													<h6>Michelle Moreno</h6>
													<p>Have sent a photo</p>
													<span class="time">3 min ago</span>
												</div>
											</div>
											<div class="mess__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
												</div>
												<div class="content">
													<h6>Diane Myers</h6>
													<p>You are now connected on message</p>
													<span class="time">Yesterday</span>
												</div>
											</div>
											<div class="mess__footer">
												<a href="#">View all messages</a>
											</div>
										</div>
									</div>
									<div class="noti__item js-item-menu">
										<i class="zmdi zmdi-email"></i>
										<span class="quantity">1</span>
										<div class="email-dropdown js-dropdown">
											<div class="email__title">
												<p>You have 3 New Emails</p>
											</div>
											<div class="email__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
												</div>
												<div class="content">
													<p>Meeting about new dashboard...</p>
													<span>Cynthia Harvey, 3 min ago</span>
												</div>
											</div>
											<div class="email__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
												</div>
												<div class="content">
													<p>Meeting about new dashboard...</p>
													<span>Cynthia Harvey, Yesterday</span>
												</div>
											</div>
											<div class="email__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
												</div>
												<div class="content">
													<p>Meeting about new dashboard...</p>
													<span>Cynthia Harvey, April 12,,2018</span>
												</div>
											</div>
											<div class="email__footer">
												<a href="#">See all emails</a>
											</div>
										</div>
									</div>
									<div class="noti__item js-item-menu">
										<i class="zmdi zmdi-notifications"></i>
										<span class="quantity">3</span>
										<div class="notifi-dropdown js-dropdown">
											<div class="notifi__title">
												<p>You have 3 Notifications</p>
											</div>
											<div class="notifi__item">
												<div class="bg-c1 img-cir img-40">
													<i class="zmdi zmdi-email-open"></i>
												</div>
												<div class="content">
													<p>You got a email notification</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__item">
												<div class="bg-c2 img-cir img-40">
													<i class="zmdi zmdi-account-box"></i>
												</div>
												<div class="content">
													<p>Your account has been blocked</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__item">
												<div class="bg-c3 img-cir img-40">
													<i class="zmdi zmdi-file-text"></i>
												</div>
												<div class="content">
													<p>You got a new file</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__footer">
												<a href="#">All notifications</a>
											</div>
										</div>
									</div>
								</div>
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="images/icon/avatar-01.jpg" alt="John Doe" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#">john doe</a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="images/icon/avatar-01.jpg" alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#">john doe</a>
													</h5>
													<span class="email">johndoe@example.com</span>
												</div>
											</div>
											<div class="account-dropdown__body">
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-account"></i>Account</a>
												</div>
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-settings"></i>Setting</a>
												</div>
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-money-box"></i>Billing</a>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="#">
													<i class="zmdi zmdi-power"></i>Logout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4>Basic Progress Bar</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a default progress bar, add a
											<code>.progress</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-3">
											<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<!-- /# card -->

								<div class="card">
									<div class="card-header">
										<h4>Labels</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a default progress bar, add a
											<code>.progress</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-2">
											<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
										</div>
									</div>
								</div>
								<!-- /# card -->

								<div class="card">
									<div class="card-header">
										<h4>Striped</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a default progress bar, add a
											<code>.progress-bar-striped</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-2">
											<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
											 aria-valuemax="100">25%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
											 aria-valuemax="100"></div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
											 aria-valuemax="100"></div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
											 aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<!-- /# card -->
							</div>


							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4>Animated Progress Bar</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a default progress bar, add a
											<code>.progress-bar-striped and .progress-bar-animated</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-3">
											<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25"
											 aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50"
											 aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75"
											 aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-3">
											<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100"
											 aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<!-- /# card -->

								<div class="card">
									<div class="card-header">
										<h4>Animated Labels</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a default progress bar, add a
											<code>.progress-bar-striped and .progress-bar-animated</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-2">
											<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25"
											 aria-valuemin="0" aria-valuemax="100">25%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50"
											 aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75"
											 aria-valuemin="0" aria-valuemax="100">75%</div>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90"
											 aria-valuemin="0" aria-valuemax="100">90%</div>
										</div>
									</div>
								</div>
								<!-- /# card -->

								<div class="card">
									<div class="card-header">
										<h4>Heights</h4>
									</div>
									<div class="card-body">
										<p class="muted">To create a height progress bar, add a
											<code>.progress-bar</code> class to a
											<code>&lt;div&gt;</code> element:</p>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTAINER-->

	</div>

	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
