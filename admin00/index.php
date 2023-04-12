<?php require '../models/config.php';?>
<?php 
  if (isset($_POST['sign_in'])) {
        extract($_POST);
        $email= cf::clean_input($email);
        $password= cf::clean_input($password);
        // FETCH USER INFO AND HOLD IN VARIABLE
      $stmt = $db->query("SELECT * FROM admin WHERE email='$email'");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_pass= $user['password'];
        $user_email= $user['email'];
        if ($email!=$user_email OR md5($password)!=$user_pass) {
        $_SESSION['invalid_login'] = "<span style='color:#fff!important'>*Error: Incorrect email or password.</span>";
        }else{
        // session_start();
        $_SESSION['login']= TRUE;
        $_SESSION['user_id']= $user['admin_id'];
        $_SESSION['email']= $user['email'];
        $_SESSION['status']= $user['status'];
        if (empty($redirect)) {
        cf::redirect('dashboard');
        }else{
        cf::redirect($redirect);
        }
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Login - <?php echo SITE_NAME ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="light/assets/css/app.min.css">
  <link rel="stylesheet" href="light/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="light/assets/css/style.css">
  <link rel="stylesheet" href="light/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="light/assets/css/custom.css">
  <!-- favicon -->
  <link rel="icon" type="image/png" href="img/dgicon.png">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4><?php echo SITE_NAME ?> <br>Admin Login</h4>
              </div>
              <?php if (isset($_SESSION['invalid_login'])) {?>
              <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  <?php echo cf::show_error('invalid_login'); ?>
                </div>
              </div>
              <?php } ?>
              <?php if (isset($_SESSION['session_expired'])) {?>
              <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  <?php echo cf::show_error('session_expired'); ?>
                </div>
              </div>
              <?php } ?>
              <div class="card-body">
                <form method="POST" action="" class="needs-validation">
                  <?php if (!empty($_GET['redirect'])) { ?>
                  <input type="hidden" class="form-control form-control-lg" placeholder="" name="redirect" value="<?php echo $_GET['redirect'] ?>" readonly>
                  <?php } ?>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <!-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div> -->
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="sign_in">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="light/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="light/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="light/assets/js/custom.js"></script>
</body>


</html>