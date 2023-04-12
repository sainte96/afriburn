<?php require '../models/config.php'; ?>
<?php 
  
   $reg_id = $_GET['reg_id'];
    $stmt = $db->query("SELECT * FROM auditions WHERE username = '$reg_id' ");
    $audition = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>
<?php $pageTitle='Auditionee Details' ?>
<?php require 'inc/header.php'; ?>
    
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $audition['name'] ?>'s Details</h4>
                    <br>
                    <?php if (isset($_SESSION['product_success'])) {cf::show_success('product_success');} ?>
                  </div>
                  <div class="card-body">
                   
                    <div class="form-group col-md-12">
                      <label>Full Name</label>
                      <p><?php echo $audition['name']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Registration NO.</label>
                        <p><?php echo $audition['username']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Email</label>
                        <p><?php echo $audition['email']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Phone</label>
                        <p><?php echo $audition['phone']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Address</label>
                        <p><?php echo $audition['address']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>School</label>
                        <p><?php echo $audition['school']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>If auditioning for a particular role, which?</label>
                        <p><?php echo $audition['role']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Experience</label>
                        <p><?php echo $audition['experience']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Talent/skills</label>
                        <p><?php echo $audition['talent']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Audition Category</label>
                        <p><?php echo $audition['category']; ?></p>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Can you help with production (publicity, box office, stage/event management)</label>
                        <p><?php echo $audition['production']; ?></p>
                    </div>
                     <div class="form-group col-md-12">
                      <label>Unavailability schedule</label>
                        <p><?php echo $audition['schedule']; ?></p>
                    </div>
                    <div class="card-footer text-right">
                     <a href="audition"><button class="btn btn-primary">Back to Auditionee Page</button></a> 
                    </div>
                   
                  </div>
                </div>
               
              </div>

            </div>
          </div>
        </section>
       
      </div>
      
<?php require 'inc/footer.php'; ?>