<?php require '../models/config.php'; ?>
<?php require '../models/send_mail.php'; ?>
<?php error_reporting(0); ?>
<?php 
if (isset($_POST['delete'])) {
    extract($_POST);
    cf::delete('auditions','username',$username);
    $_SESSION['delete']= 'User deleted successfully';
    cf::redirect('audition');
  }

  if(isset($_POST['select'])){
          extract($_POST);
        $username = cf::clean_input($_POST['username']);
        $status = cf::clean_input($_POST['status']);
        $stmt = $db->query("SELECT * FROM auditions WHERE username = '$username' ");
        $users = $stmt->fetch(PDO::FETCH_ASSOC);
        $name = $users['name'];
        $email = $users['email'];
        $category = $users['category'];
       
        $stmt_update = $db->prepare("UPDATE auditions SET `status`= ?  WHERE `username`= ?");
        $stmt_update->execute(array($status,$username));
        
        $_SESSION['selected'] = $name.' has been selected successfully';
        sm::selected_mail($email,$name,$category);
        cf::redirect('audition');
        }
 ?>
<?php $pageTitle='Audition' ?>
<?php require 'inc/header.php'; ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                    <h4>AfriBURN Auditions</h4>
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
                            <th>Reg. No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Talent/Skills</th>
                            <th>Category</th>
                            <th>Reg. Date</th>
                            <th>View Details</th>
                            <th>Select</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = "";
                            $stmt = $db->query("SELECT * FROM auditions ORDER BY id DESC");
                            while ($face = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $username = $face['username'];
                            $no+=1;
                          ?>
                          <tr>
                            <td><small><?php echo $no; ?></small></td>
                            <td><small><?php echo $face['username']; ?></small></td>
                            <td><small><?php echo $face['name']; ?></small></td>
                            <td><small><?php echo $face['email']; ?></small></td>
                            <td><small><?php echo $face['phone']; ?></small></td>
                            <td><small><?php echo $face['age']; ?></small></td>
                            <td><small><?php echo $face['gender']; ?></small></td>
                            <td><small><?php echo $face['role']; ?></small></td>
                            <td><small><?php echo $face['talent']; ?></small></td>
                            <td><small><?php echo $face['category']; ?></small></td>
                            <td><small><?php echo $face['dated']; ?></small></td>
                            <td><small>
                              <a href="auditionee?reg_id=<?php echo $username; ?>">  <button class="btn btn-icon btn-dark" >View Details</button></a>
                            </small></td>
                            <td><small>
                               <form method="post" action="">
                              <input type="hidden" name="username" value="<?php echo $face['username']; ?>" readonly>

                              <input type="hidden" name="status" value="1" readonly>
                                   <?php if($face['status'] == 0) { ?>
                                <button type="submit" name="select" onclick="return selected()" class="btn btn-icon btn-primary">Select</button>
                              <?php }elseif($face['status'] == 1){ ?>
                                <button  class="btn btn-icon btn-success" >Selected</button>
                              <?php } ?>
                            </form>
                            </small></td>
                            <td><small>
                              <form method="post" action="">
                              <input type="hidden" name="username" value="<?php echo $face['username']; ?>" readonly>

                                  
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