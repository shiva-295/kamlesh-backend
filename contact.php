<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Workoo - Freelancing HTML Template</title>

	<!-- All Plugins Css -->
	<link href="assets/css/plugins.css" rel="stylesheet">


	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="blue-skin">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="Loader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<?php include "includes/header.php"?>
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Page Title Start================================== -->
		<div class="page-title inner-page mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<h2 class="ipt-title">Contact Us</h2>
						<span class="ipn-subtitle">Looking For a design partner? You Found.</span>

					</div>
				</div>
			</div>
			<div class="ht-80"></div>
		</div>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ Main Section Start ================================== -->
		<section class="pt-0">
			<div class="container overlio-top">
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="contact_side overlio-top">

							<div class="ct_cmp_social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="ct_cmp_caption">
								<h4 class="mb-0">Get in Touch.</h4>
								<p>Get in touch via mail, call and direct address.</p>
							</div>

							<div class="ct_cmp_address">
								<div class="ct_cmp_single">
									<div class="ct_cmp_single_icon"><i class="ti-location-pin"></i></div>
									<div class="ct_cmp_brief">
										<h5>Reach Us:</h5>
										<span>22 Wilson Market, Montreal<br>Canada, HPQCH</span>
									</div>
								</div>
								<div class="ct_cmp_single">
									<div class="ct_cmp_single_icon"><i class="fa fa-envelope"></i></div>
									<div class="ct_cmp_brief">
										<h5>Drop a mail:</h5>
										<span>uppdi.support@gmail.com</span>
									</div>
								</div>
								<div class="ct_cmp_single">
									<div class="ct_cmp_single_icon"><i class="fa fa-phone"></i></div>
									<div class="ct_cmp_brief">
										<h5>Call Us:</h5>
										<span>+91 256 258 4759</span>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Item Wrap Start -->
					<div class="col-lg-8 col-md-8 col-sm-12 ">
						<form class="contact_row">

							<div class="form_row_box">
								<div class="form_row_header">
									<div class="form_row_header_flex"><img src="assets/img/email.svg" class="img-fluid" width="52" alt="" /></div>
									<div class="form_row_header_right">
										<p>Write as a few words about your query and we'll prepare your query for you within <strong>24</strong> hours and inform you shortly.</p>
									</div>
								</div>
								<div class="form_row_box_body">
									<div class="form-row">

										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Your Name</label>
												<input type="text" class="form-control with-light" placeholder="Your Name" />
											</div>
										</div>

										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Your e-Mail</label>
												<input type="email" class="form-control with-light" placeholder="updicl@gmail.com" />
											</div>
										</div>

										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Company</label>
												<input type="text" class="form-control with-light" placeholder="ThemezHub Ltd." />
											</div>
										</div>

										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Phone No.</label>
												<input type="text" class="form-control with-light" placeholder="+91 256 584 7863" />
											</div>
										</div>

										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Your Query</label>
												<textarea class="form-control with-light">About Your Query</textarea>
											</div>
										</div>

										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="upfile">
													<label class="custom-file-label" for="upfile">Upload file</label>
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<button type="button" class="btn dark-3">Submit Query</button>
											</div>
										</div>

									</div>
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Main Section End ================================== -->

		<!-- ============================ Call To Action Start ================================== -->
		
		<!-- ============================ Call To Action End ================================== -->

		<?php include "includes/footer.php"?>

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<div class="modal-header">
						<h4>Sign In</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
					</div>
					<div class="modal-body">

						<div class="login-form">
							<form>

								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="Username">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>

								<div class="form-group">
									<button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
								</div>

							</form>
						</div>

						<div class="form-group text-center">
							<span>Or Signin with</span>
						</div>

						<div class="social_logs mb-4">
							<ul class="shares_jobs text-center">
								<li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
								<li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" class="theme-cl"> Sign Up</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Upload Resume -->
		<div class="modal fade" id="upload-resume" tabindex="-1" role="dialog" aria-labelledby="resumeupload" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="resumeupload">
					<div class="modal-header">
						<h4>Upload Resume</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
					</div>
					<div class="modal-body">

						<div class="login-form">
							<form>

								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>

									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<label>E-Mail ID</label>
											<input type="email" class="form-control" placeholder="ucicl@gmail.com">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Paste Your Resume</label>
									<textarea class="form-control ht-150" placeholder="Copy & Paste Resume"></textarea>
								</div>

								<div class="form-group">
									<label class="light">doc, docx,pdf,txt,png</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="uploadResume">
										<label class="custom-file-label" for="uploadResume"><i class="ti-link mr-1"></i>Upload Resume</label>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn dark-2 btn-md full-width pop-login">Upload Resume</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Upload Resume -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script src="assets/js/materialize.min.js"></script>
	<script src="assets/js/metisMenu.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->


</body>

</html>