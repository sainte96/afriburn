	<?php include('models/config.php') ?>
	<?php 
	    if (isset($_POST['contact_us'])) {
	        extract($_POST);

	        // pear mail codes
	         $from = "AfriBURN<ask@afriburn.ng>"; //enter your email address
	         $to = "ask@afriburn.ng"; //enter the email address of the contact your sending to
	         $subject = "New Message From Contact Form"; // subject of your email

	        $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);
	        // $headers_user = array ('From' => $from,'To' => $email, 'Subject' => 'Message Received');

	        $text = ''; // text versions of email.
	        $html = "<html><body>Name: $name <br> Email: $email <br> Phone Number: $phone <br> Message: $comments <br></body></html>"; // html versions of email.
	        // $html_user = "<html><body>Thank you for contacting us. We will get back to you soon.<br><br>Cheers!<br><br>AfriBURN Team.</body></html>"; // html versions of email.

	        $crlf = "\n";

	        $mime = new Mail_mime($crlf);
	        $mime->setTXTBody($text);
	        $mime->setHTMLBody($html);
	        // $mime->setHTMLBody($html_user);

	        //do not ever try to call these lines in reverse order
	        $body = $mime->get();
	        $headers = $mime->headers($headers);
	        // $headers_user = $mime->headers($headers_user);

	         $host = "localhost"; // all scripts must use localhost
	         $username = "ask@afriburn.ng"; //  your email address (same as webmail username)
	         $password = "ask@afriburn123"; // your password (same as webmail password)

	        $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
	        'username' => $username,'password' => $password));

	        $mail = $smtp->send($to, $headers, $body);
	        // $mail_user = $smtp->send($email, $headers_user, $body);

	        if (PEAR::isError($mail)) {
	        echo("<p>" . $mail->getMessage() . "</p>");
	        }
	        else {
	        $_SESSION['sent']='Thank you for contacting us. We will get back to you soon.';
	        cf::mobi_redirect('contact#contact');
	        }
	    }
	    
	 ?>
	<?php $pageTitle= 'Contact Us' ?>
	<?php require 'inc/header.php'; ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-black">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-md bg-pt overlay-primary-dark" style="background-image:url(img/banner2.png);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<p class="content">Talk to us today. </p>
                </div>
            </div>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="./">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb row END -->
        </div>
        <!-- inner page banner END -->
		<!-- Contact Form -->
		<div class="section-full content-inner contact-box">
			<div class="container">
				<div class="row m-b50">
					<div class="col-lg-4 col-md-6">
						<div class="dlab-box services-style2 m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-primary">
									<i class="ti-headphone-alt"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5" style="color: white">Phone</h4>
								<p class="m-b0">Phone 01: +234 (0) 807 300 9242 <br> Phone 02: +234 (0) 703 761 0005</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="dlab-box services-style2 m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-primary">
									<i class="ti-location-pin"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5" style="color: white">Address</h4>
								<p class="m-b0">Ibadan, Oyo State Nigeria</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="dlab-box services-style2 m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-primary">
									<i class="ti-email"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5" style="color: white">Email</h4>
								<p class="m-b0">ask@afriburn.ng</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="contact">
					<div class="col-lg-5 d-flex">
						<div class="section-head align-self-center">
							<h2 class="title-head m-b5 text-success">Get in touch with us</h2>
                            <p><?php cf::show_success('sent'); ?></p>
						</div>
					</div>
					<div class="col-lg-7 m-b30">
						<form method="post" class="" action="">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input name="name" type="text" required class="form-control" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="email" type="email" class="form-control" required  placeholder="Your Email Address" >
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input name="phone" type="text" required class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<textarea name="comments" rows="4" class="form-control" required placeholder="Your message here"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="check1" name="example1" required>
											<label class="custom-control-label" for="check1">I agree with the Terms of Use and Privacy Policy </label>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<button name="contact_us" type="submit" class="btn btn-danger">Send Message<span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Form End -->
    </div>
    <!-- Content END-->
	<!-- Footer END -->
    <?php require 'inc/footer.php'; ?>
    