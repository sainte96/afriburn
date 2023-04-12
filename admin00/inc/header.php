<?php 
  if ($_SESSION['status']!='admin') {
        $_SESSION['session_expired'] = "<span style='color:#fff!important'>Session expired. You need to login.</span>";
        cf::mobi_redirect('https://afriburn.ng/admin00/?redirect='.URL);
    }
 ?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $pageTitle; ?> - <?php echo SITE_NAME; ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="light/assets/css/app.min.css">
  <link rel="stylesheet" href="light/assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="light/assets/bundles/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="light/assets/bundles/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="light/assets/bundles/prism/prism.css">
  <link rel="stylesheet" href="light/assets/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="light/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="light/assets/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="light/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="light/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="light/assets/css/style.css">
  <link rel="stylesheet" href="light/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="light/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='https://afriburn.ng/img/icon.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../img/avatar.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Admin</div>
              <a href="logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="https://afrimoviebox.afriburn.ng/"> <img alt="image" src="https://afriburn.ng/img/logo_black.png" class="header-logo" style="height: 60px" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../img/avatar.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo SITE_NAME; ?> Admin</div>
              <!-- <div class="user-role">Administrator</div> -->
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="<?php if ($pageTitle=='Admin Dashboard'){echo 'active';} ?>">
              <a href="dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
          
            
            <li class="<?php if ($pageTitle=='Audition'){echo 'active';} ?>">
              <a href="audition" class="nav-link"><i data-feather="users"></i><span>Auditionee</span></a>
            </li>

            <li class="<?php if ($pageTitle=='Afriburn Film Academy'){echo 'active';} ?>">
              <a href="afriburn-academy" class="nav-link"><i data-feather="users"></i><span>Afriburn Academy</span></a>
            </li>

            <li class="<?php if ($pageTitle=='Afriburn Film Payment'){echo 'active';} ?>">
              <a href="academy-payment" class="nav-link"><i data-feather="dollar-sign"></i><span>Afriburn Film Payments</span></a>
            </li>
            
          </ul>
        </aside>
      </div>