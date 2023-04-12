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
<?php $pageTitle= 'AfriBURN Academy' ?>
<?php require 'inc/header.php'; ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-black">
		<br>
            <!-- About Us -->
           	<div class="section-full content-inner contact-box">
			<div class="container">
				
				<div class="row" id="contact">
					<div class="col-lg-3 d-flex">
						<!-- <div class="section-head align-self-center">
							<div class="dlab-media radius-md align-self-center">
								<img src="img/registration.png" alt="">
							</div>
							<h2 class="title-head m-b5 text-success">Face OF AfriBurn</h2>
						</div> -->
					</div>
					<div class="col-lg-6 m-b30">
						<h3 class="title-head m-b5 text-success">AfriBURN Academy</h3>
						<p>AfriBURN Film Academy, was created to afford the public the opportunity to pick up a skill at a professional level quite affordably and live their creative dreams will knowledge of what they love.
						<br/>
						Our programs cover 3 – 6 months professional courses and a 1-year diploma.
						</p>

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
										<input name="address" type="text" required class="form-control" placeholder="Contact Address">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="phone" type="text" required class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="email" type="email" class="form-control" required  placeholder="Email Address" >
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div>

									<div class="form-check form-check-inline">
									<label class="form-check-label" for="inlineRadio3">Gender</label>
									 
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
									  <label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
									  <label class="form-check-label" for="inlineRadio2">Female</label>
									</div>

										  </div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<select class="form-select" name="mcourse" required id="name">
											<option readonly>Course Selection</option>
											<option id="filmoption" value="FILM PRODUCTION">FILM PRODUCTION</option>
											<option value="POST PRODUCTION">POST PRODUCTION</option>
											<option value="GRAPHICS DESIGN">GRAPHICS DESIGN</option>
											<option value="PHOTOGRAPHY">PHOTOGRAPHY</option>
											<option value="MOTION GRAPHICS">MOTION GRAPHICS</option>
											<option value="FLAT ANIMATION">FLAT ANIMATION</option>
											<option value="MUSIC PRODUCTION">MUSIC PRODUCTION</option>
										</select>
									</div>
								</div>
								<div style="display: none;" class="col-lg-12" id="film">
									<div class="form-group">
										<select class="form-select" name="course" required>
											<option readonly>Course Selection</option>
											<option value="CINEMATOGRAPHY">CINEMATOGRAPHY</option>
											<option value="DIRECTING">DIRECTING</option>
											<option value="ACTING">ACTING</option>
											<option value="LIGHTING FOR FILM AND TV">LIGHTING FOR FILM AND TV</option>
											<option value="PRODUCTION MANAGEMENT">PRODUCTION MANAGEMENT</option>
											<option value="SOUND RECORDING FOR FILM AND TV">SOUND RECORDING FOR FILM AND TV</option>
											<option value="SCREEN WRITING">SCREEN WRITING</option>
										</select>
									</div>
								</div>
								<div style="display: none;" class="col-lg-12" id="post">
									<div class="form-group">
										<select class="form-select" name="course" required>
											<!-- <option readonly>Course Selection</option> -->
											<option value="VIDEO/MOVIE EDITING">VIDEO/MOVIE EDITING</option>
											<option value="COLOUR GRADING">COLOUR GRADING</option>
											<option value="SOUND SCORING">SOUND SCORING</option>
											<option value="VFX (VIDEO EFFECTS)">VFX (VIDEO EFFECTS)</option>
											<option value="TYPOGRAPHY">TYPOGRAPHY</option>
											<option value="SFX (SOUND EFFECTS)">SFX (SOUND EFFECTS)</option>
											<option value="SOUND EDITING">SOUND EDITING</option>
										</select>
									</div>
								</div>
								<div style="display: none;" class="col-lg-12" id="flat">
									<div class="form-group">
										<select class="form-select" name="course" required>
											<!-- <option readonly>Course Selection</option> -->
											<option value="CHARACTER MODELLING">CHARACTER MODELLING</option>
											<option value="INFOGRAPHICS">INFOGRAPHICS</option>
											<option value="EXPLAINER VIDEOS">EXPLAINER VIDEOS</option>
										</select>
									</div>
								</div>
								<div style="display: none;" class="col-lg-12" id="music">
									<div class="form-group">
										<select class="form-select" name="course" required>
											<!-- <option readonly>Course Selection</option> -->
											<option value="MUSIC RECORDING">MUSIC RECORDING</option>
											<option value="MIXING AND MASTERING">MIXING AND MASTERING</option>
											<option value="MUSIC PRODUCTION FOR FILM">MUSIC PRODUCTION FOR FILM</option>
											<option value="BEAT MAKING">BEAT MAKING</option>
											
										</select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<select class="form-select" name="duration" required>
											<option selected readonly>DURATION</option>
											<option value="3 MONTHS (PROFESSIONAL)">3 MONTHS (PROFESSIONAL)</option>
											<option value="6 MONTHS (PROFESSIONAL)">6 MONTHS (PROFESSIONAL)</option>
											<option value="1 YEAR DIPLOMA">1 YEAR DIPLOMA</option>
										</select>
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
									<!-- <p class="text-white">NB:  Make sure you're following the Instagram handle @afriburn.ng before registering.</p> -->
									<button name="register" type="submit" class="btn btn-danger">Register<span></span></button>
								</div>
								
							</div>
						</form>
					</div>
					<div class="col-lg-3 d-flex">
						<!-- <div class="section-head align-self-center">
							<div class="dlab-media radius-md align-self-center">
								<img src="img/registration.png" alt="">
							</div>
							<h2 class="title-head m-b5 text-success">Face OF AfriBurn</h2>
						</div> -->
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

 <script type="text/javascript">
$(function () {

        $("#name").change(function () {
            if ($(this).val() == "FILM PRODUCTION") {
                $("#film").show();
            } else {
                $("#film").hide();
            }
        });

        $("#name").change(function () {
            if ($(this).val() == "POST PRODUCTION") {
                $("#post").show();
            } else {
                $("#post").hide();
            }
        });

        $("#name").change(function () {
            if ($(this).val() == "FLAT ANIMATION") {
                $("#flat").show();
            } else {
                $("#flat").hide();
            }
        });

        $("#name").change(function () {
            if ($(this).val() == "MUSIC PRODUCTION") {
                $("#music").show();
            } else {
                $("#music").hide();
            }
        });


    });





//  $(document).ready(function(){

// $("#firmoption").click(function(){
// 	// $("#firm").fadeIn(2000);
// 	alert('working');
// });

// $("#closebox").click(function(){
// 	$("#replybox").hide();
// });

// });
</script>