<?php include('models/config.php'); ?>
<?php 
$service = $_GET['page'];
 ?>
<?php $pageTitle = "Africonnect"; ?>
<?php require 'inc/header.php'; ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-black">
		<br>
            <div class="content-block">
			<!-- Error 404 -->
			<div class="section-full error-style1" style="/*background-image: url(img/banner2.png);*/ background-size: cover; height: 100vh;background-position: top;">
				<div class="container align-self-center">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="error-page">
								<div class="dz_error " style="color: white; font-size: 80px;">Coming Soon</div>
								<?php if($service == 'afrisport'){ ?>
								<h2 class="error-head " style="color: white;">Afrisport is unavailable right now.</h2>
								<h4 class="error-head " style="color: red;">Thanks for joining us.</h4>
								<?php } ?>
								<?php if($service == 'afrimatter'){ ?>
								<h2 class="error-head " style="color: white;">AfriMatter is unavailable right now.</h2>
								<h4 class="error-head " style="color: red;">Thanks for joining us.</h4>
								<?php } ?>
								<?php if($service == 'afrinews'){ ?>
								<h2 class="error-head " style="color: white;">Afriburn News is unavailable right now.</h2>
								<h4 class="error-head " style="color: red;">Thanks for joining us.</h4>
								<?php } ?>
								<?php if($service == 'afrievents'){ ?>
								<h2 class="error-head " style="color: white;">Afri Events is unavailable right now.</h2>
								<h4 class="error-head " style="color: red;">Thanks for joining us.</h4>
								<?php } ?>
								
								<a href="africonnect" class="btn radius-xl btn-lg " style="color: white;">Return to Africonnect</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Error 404 End -->
        </div>
        </div>

           <!--  <div class="section-full bg-black content-inner about-style1">
                <div class="container">
					
				</div>
            </div> -->
			<!-- About Us End -->
			
			
			
	<!-- Content END-->
    <!-- Footer END -->
    <?php require 'inc/footer.php'; ?>