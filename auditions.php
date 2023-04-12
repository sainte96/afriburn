<?php require 'models/config.php'; ?>
<?php require 'models/send_mail.php'; ?>
<?php 
if (isset($_POST['email'])) {
        extract($_POST);
        $name= cf::clean_input($_POST['name']);
        $email= cf::clean_input($_POST['email']);
        $phone= cf::clean_input($phone);
        $age= cf::clean_input($age);
        $school= cf::clean_input($school);
        $gender= cf::clean_input($_POST['gender']);
        $address= cf::clean_input($address);
        $category= cf::clean_input($category);
        $role= cf::clean_input($_POST['role']);
        $experience= cf::clean_input($_POST['experience']);
        $talent= cf::clean_input($_POST['talent']);
        $production= cf::clean_input($_POST['production']);
        $schedule= cf::clean_input($_POST['schedule']);
        // $link= cf::clean_input($_POST['link']);
        $username= cf::random_alphanum(9);
        $dated= date('d-M-Y');

        $content = '';
        if($category == 'Face of Afriburn'){
        $content = '<p>- Record yourself in one minute telling your audience what makes you their favorite choice and upload this video on Instagram using the hashtag #AfriBURNstarcontest. <br> Be sure to tag @afriburn.ng and share your video link as a reply to this email.</p>';
		}elseif($category == 'StandUP Comedy'){
		$content = '<p>- Record yourself in one minute sharing your funniest solo skits and upload this video on Instagram using the hashtag #AfriBURNstarcontest. <br> Be sure to tag @afriburn.ng and share your video link as a reply to this email.</p>';
		}elseif($category == 'Acting'){
		$content = '<p>- Record a one minute monologue and upload this video on Instagram using the hashtag #AfriBURNstarcontest. <br> Be sure to tag @afriburn.ng and share your video link as a reply to this email.</p>';	
		}elseif($category=='Music Star'){
		$content = '<p>- Record yourself in one minute singing your favorite song and upload this video on Instagram using the hashtag #AfriBURNstarcontest. <br> Be sure to tag @afriburn.ng and share your video link as a reply to this email.</p>';	
		}


        $admin_email = 'auditions@afriburn.ng';
        $_SESSION['success']= 'You have registered successfully';
        sm::auditions($email,$name,$category,$username,$content);
        sm::audition_notification($admin_email,$name,$username);
        dbi::auditions($username,$name,$email,$phone,$age,$gender,$address,$school,$role,$experience,$talent,$category,$production,$schedule,$dated,'0');
        cf::redirect('auditions');
    }
 ?>
<?php $pageTitle= 'Afriburn Auditions' ?>
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
								<img src="img/afriburn_auditions.jpg" alt="">
							</div>
							<br>
							<!-- <h2 class="title-head m-b5 text-success">AfriBurn Auditions</h2> -->
							<!-- <p>Check the banner for instrustions before you register!</p> -->
						</div>
					</div>
					<div class="col-lg-7 m-b30">
						<h3 class="title-head m-b5 text-success">AfriBURN Auditions</h3>
						<h5 class="title-head m-b5 text-success">Follow the instructions</h5>
						<p>- Register and Make payment.</p>
						<p>- Receive a mail with instructions to upload video on IG with your registration number as caption. Follow AfriBURN on IG. And reply the mail with your IG video link.</p>
                         <p><?php cf::show_success('success'); ?></p>
						<form method="post" class="" action="" id="myForm">
							<div class="row">
								
								<div class="col-lg-12">

									<div class="form-group">
										<input name="name" type="text" required class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="email" type="email" class="form-control" required  placeholder="Email Address" id="email-address">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="phone" type="number" class="form-control" required  placeholder="Phone Number" >
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="age" type="number" required class="form-control" placeholder="Age">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<select class="form-select" name="gender" required >
											<option value="" readonly>Your Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
										<!-- <input name="gender" type="text" required class="form-control" placeholder="Gender"> -->
										<input name="ref" type="hidden" required class="form-control" placeholder="Gender" id="ref" value="<?php echo cf::get_unique_code(8); ?>">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="address" type="text" required class="form-control" placeholder="Address">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<select class="form-select" name="school" required id="name">
											<option value="" readonly>Your School</option>
											<option value="University of lagos">University of lagos</option>
											<option value="University of ibadan ">University of ibadan </option>
											<option value="Ekiti state university ">Ekiti state university </option>
											<option value="University of Abuja">University of Abuja </option>
											<option value="University of Nigeria">University of Nigeria  </option>
											<option value="University of Osun state">University of Osun state </option>
											<option value="University of ilorin">University of ilorin</option>
											<option value="Obafemi Awolowo University">Obafemi Awolowo University</option>
											<option value="Ajayi crowder University">Ajayi crowder University</option>
											<option value="Lead city University">Lead city University</option>
											<option value="Abuja state university">Abuja state university</option>
											<option value="Olabisi Onabajo University">Olabisi Onabajo University</option>
											<option value="Dominican University">Dominican University</option>
											<option value="None of the Above">None of the Above</option>
										</select>
									</div>
								</div>

									<div class="col-lg-12">
									<div class="form-group">
										<input name="role" type="text" required class="form-control" placeholder="If auditioning for a particular role, which ?">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="experience" type="text" required class="form-control" placeholder="Experience">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="talent" type="text" required class="form-control" placeholder="Talent/skills">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<select class="form-select" name="category" required >
											<option value="" readonly>Pick Audition Category</option>
											<option value="Face of Afriburn">Face of AfriBURN - Modeling (Male and Female Category)</option>
											<option value="StandUP Comedy">AfriBURN StandUP - Comedy (Male and Female Category)</option>
											<option value="Acting">AfriBURN Act - Acting (Male and Female Category)</option>
											<option value="Music Star">AfriBURN Music Star - Music (Male and Female Category)</option>

										</select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<input name="production" type="text" required class="form-control" placeholder="Can you help with production (publicity, box office, stage/event management)">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="schedule" type="text" required class="form-control" placeholder="Unavailability schedule">
									</div>
								</div>

								<!-- <div class="col-lg-12">
									<div class="form-group">
										<input name="link" type="text" required class="form-control" placeholder="Your Video Link">
									</div>
								</div> -->
								
								<!-- <div class="col-lg-12">
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="check1" name="example1" required>
											<label class="custom-control-label" for="check1">I agree with the Terms of Use and Privacy Policy </label>
										</div>
									</div>
								</div> -->
								<div class="col-md-12">
									<p class="text-white"><span class="text-red">Disclaimer:</span> Filling this form shows your interest in auditioning for films, skits, series etc produced by AfriBURN Studios. If your screening process is successful, you will be assigned matching roles. You also grant us permission to view content sent by you (videos, texts etc) together as a team and share when necessary.</p>
									<!-- <button name="register" type="button" class="btn btn-danger" onclick="makePayment()">Register<span></span></button> -->
									<button name="register" type="button" class="btn btn-danger" onclick="ValidateForm()">Register<span></span></button>
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

			<!-- paystack integration -->
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<script type="text/javascript">
			  function pay(){
			    // var amount= document.getElementById('amt').value+'00';
			    var email= document.getElementById('email-address').value;
			    // var amount= amt;
			    // var email= email;
			    // var plan= plan;
			    var handler = PaystackPop.setup({
			      // key: 'pk_test_5f79caf53cf9e640a03d7ed49bd5aadc3f69395f',
			      key: 'pk_live_974c4aec3dd75d9074a468e09654396a4e9f960c',
			      email: email,
			      amount: 200000,
			      currency: "NGN",
			      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
			      metadata: {
			         custom_fields: [
			            {
			                display_name: "Mobile Number",
			                variable_name: "mobile_number",
			                value: "+2348012345678"
			            }
			         ]
			      },
			      callback: function(response){
			          // alert('success. transaction ref is ' + response.reference);
			          document.getElementById("myForm").submit();
			      },
			      onClose: function(){
			          // alert('window closed');
			      }
			    });
			    handler.openIframe();
			  }

			  function ValidateForm() {

				  var formInvalid = false;
				  $('#myForm input').each(function() {
				    if ($(this).val() === '') {
				      formInvalid = true;
				    }
				  });

				  $('#myForm select').each(function() {
				    if ($(this).val() === '') {
				      formInvalid = true;
				    }
				  });

				  // alert(formInvalids)
				  if (formInvalid)
				    alert('One or Two fields are empty. Please fill up all fields');
				  else
				  	// alert('all good');
				  	pay();
			}
			</script>	
			
		    <script src="https://checkout.flutterwave.com/v3.js"></script>
			<script type="text/javascript">
				function makePayment() {
			        var email= document.getElementById('email-address').value;
			        if (email=='') {
			        	alert('Email cannot be empty.');
			        	return;
			        }
			        
			        FlutterwaveCheckout({
			          // public_key: "FLWPUBK-b66f767978c316d51cc5825bb202a0da-X",
			          public_key: "FLWPUBK_TEST-1c7a9d26ae474048a1c20ab84b031c34-X",
			          tx_ref: document.getElementById('ref').value,
			          amount: 2000,
			          currency: "NGN",
			          country: "NG",
			          payment_options: "card, mobilemoneyghana, ussd",
			          customer: {
			            email: document.getElementById('email-address').value,
			          },
			          callback: function (data) {
			            // console.log(data);
			            document.getElementById("myForm").submit();
			            // $.ajax({
			            //     url: 'process-5?reference='+ document.getElementById('ref').value +'&amount='+document.getElementById('amount').value,
			            //     method: 'get',
			            //     success: function (response) {
			            //       // alert(response);
			            //       document.getElementById('the-balance').innerHTML='<span>Balance</span>₦'+response;
			            //     }
			            // });
			          },
			          onclose: function() {
			            // close modal
			          },
			          customizations: {
			            title: "Gravid Games",
			            description: "Recharge Your Wallet",
			            logo: "https://gravidgames.com/img/gravid-logo.png",
			          },
			        });
			      }
			</script>
	<!-- Content END-->
    <!-- Footer END -->
    <?php require 'inc/footer.php'; ?>