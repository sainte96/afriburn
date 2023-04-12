<?php require 'models/config.php'; ?>
<?php require 'models/send_mail.php'; ?>
<?php 
if (isset($_POST['register'])) {
        extract($_POST);
        $fname= cf::clean_input($_POST['fname']);
        $lname= cf::clean_input($_POST['lname']);
        $state= cf::clean_input($state);
        $phone= cf::clean_input($phone);
        $instagram= cf::clean_input($instagram);
        $email= cf::clean_input($_POST['email']);
        $username= cf::random_alphanum(9);
        $dated= date('d-M-Y');
        $_SESSION['success']= 'You have registered successfully';
        sm::face_of_register($email,$fname);
        sm::face_of_register_notification('ask@afriburn.ng',$fname,$lname);
        dbi::audition($username,$fname,$lname,$state,$phone,$email,$instagram,$dated,'0');
        cf::redirect('face-of-afriburn');
    }
 ?>
<?php $pageTitle= 'Face of Afriburn' ?>
<?php require 'inc/header.php'; ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-black">
		<br>
            <!-- About Us -->
           	<div class="section-full content-inner contact-box">
			<div class="container">
				
				<div class="row" id="contact">
					<div class="col-lg-5 d-flex">
						<div class="section-head align-self-center">
							<div class="dlab-media radius-md align-self-center">
								<img src="img/registration.png" alt="">
							</div>
							<!-- <h2 class="title-head m-b5 text-success">Face OF AfriBurn</h2> -->
						</div>
					</div>
					<div class="col-lg-7 m-b30">
						<h3 class="title-head m-b5 text-success">Face of AfriBURN</h3>
                         <p><?php cf::show_success('success'); ?></p>
						<form method="post" class="" action="">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input name="fname" type="text" required class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="lname" type="text" required class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="email" type="email" class="form-control" required  placeholder="Email Address" >
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="phone" type="text" required class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="instagram" type="text" required class="form-control" placeholder="Instagram Profile Link">
									</div>
								</div>
								
								<!-- <div class="col-lg-12">
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="check1" name="example1" required>
											<label class="custom-control-label" for="check1">I agree with the Terms of Use and Privacy Policy </label>
										</div>
									</div>
								</div> -->
								<div class="col-md-12">
									<p class="text-white">NB:  Make sure you're following the Instagram handle @afriburn.ng before registering.</p>
									<button name="register" type="submit" class="btn btn-danger">Register<span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

           <!--  <div class="section-full bg-black content-inner about-style1">
                <div class="container">
					
				</div>
            </div> -->
			<!-- About Us End -->
			
			<br>
			<br>
			<br>
			
	<!-- Content END-->
    <!-- Footer END -->
    <?php require 'inc/footer.php'; ?>