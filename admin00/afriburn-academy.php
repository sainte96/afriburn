<?php require '../models/config.php'; ?>
<?php require '../models/send_mail.php'; ?>
<?php error_reporting(0); ?>
<?php 
if (isset($_POST['delete'])) {
    extract($_POST);
    cf::delete('academy','reg_id',$reg_id);
    $_SESSION['delete']= 'User deleted successfully';
    cf::redirect('afriburn-academy');
  }

  // if(isset($_POST['select'])){
  //         extract($_POST);
  //       $username = cf::clean_input($_POST['username']);
  //       $status = cf::clean_input($_POST['status']);
  //       $stmt = $db->query("SELECT * FROM audition WHERE username = '$username' ");
  //       $users = $stmt->fetch(PDO::FETCH_ASSOC);
  //       $fname = $users['fname'];
  //       $email = $users['email'];
       
  //       $stmt_update = $db->prepare("UPDATE audition SET `status`= ?  WHERE `username`= ?");
  //       $stmt_update->execute(array($status,$username));
        
  //       $_SESSION['selected'] = $fname.' has been selected successfully';
  //       sm::selected_mail($email, $fname);
  //         cf::redirect('audition');
  //       }
 ?>
<?php $pageTitle='Afriburn Film Academy' ?>
<?php require 'inc/header.php'; ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                    <h4>AfriBURN Film Academy</h4>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-1">
                      
                    </div>

                    <div class="col-md-3">
                      <?php if (isset($_SESSION['selected'])) {  ?>
                        <p><?php echo cf::show_success('selected'); ?></p>
                      <?php } ?>
                      <?php if (isset($_SESSION['delete'])) {  ?>
                        <p><?php echo cf::show_error('delete'); ?></p>
                      <?php } ?>
                    </div>
                     <div class="col-md-6">
                       
                     </div>
                    
                  </div>
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>S/N</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Nationality</th>
                            <th>Program</th>
                            <th>Course</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Reg. Date</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = "";
                            $stmt = $db->query("SELECT * FROM academy ORDER BY id DESC");
                            while ($academy = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $no+=1;
                          ?>
                          <tr>
                            <td><small><?php echo $no; ?></small></td>
                            <td><small><?php echo $academy['reg_id']; ?></small></td>
                            <td><small><?php echo $academy['fname'].' '.$academy['lname']; ?></small></td>
                            <td><small><?php echo $academy['address']; ?></small></td>
                            <td><small><?php echo $academy['phone']; ?></small></td>
                            <td><small><?php echo $academy['email']; ?></small></td>
                            <td><small><?php echo $academy['gender']; ?></small></td>
                            <td><small><?php echo $academy['nationality']; ?></small></td>
                            <td><small><?php echo $academy['mcourse']; ?></small></td>
                            <td><small><?php echo $academy['course']; ?></small></td>
                            <td><small><?php echo $academy['duration']; ?></small></td>
                            <td><small>
                            <?php if($academy['status'] == 0) { ?>
                                <button class="btn btn-icon btn-danger">unpaid</button>
                              <?php }elseif($academy['status'] == 1){ ?>
                                <button  class="btn btn-icon btn-success" >Paid</button>
                              <?php } ?>
                            </small></td>
                            
                            <td><small><?php echo $academy['timein']; ?></small></td>
                            
                            <td><small>
                              <form method="post" action="">
                              <input type="hidden" name="reg_id" value="<?php echo $academy['reg_id']; ?>" readonly>

                                  
                                <button type="submit" name="delete" onclick="return erase()" class="btn btn-icon btn-danger" >Delete</button>
                              
                            </form>
                            </small></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php require 'inc/footer.php'; ?>
<script type="text/javascript">
    function selected() {
      var x = confirm("Are you sure want to select?");
        if (x)
            return true;
        else
          return false;
    }
  </script>

  <script type="text/javascript">
    function erase() {
      var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
          return false;
    }
  </script>