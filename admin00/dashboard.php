<?php require '../models/config.php'; ?>
<?php $pageTitle='Admin Dashboard' ?>
<?php require 'inc/header.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-bg">
                  <div class="p-t-20 d-flex justify-content-between">
                    <div class="col">
                      <h6 class="mb-0">Total Auditionees</h6>
                        <span class="font-weight-bold mb-0 font-20"><?php echo cf::countall('*','audition'); ?></span>
                        <br>
                        <!-- <a href="movies"><span class="">View All</span></a> -->
                    </div>
                    <i class="fas fa-users card-icon col-green font-30 p-r-30"></i>
                  </div>
                  <br>
                  <!-- <canvas id="cardChart1" height="80"></canvas> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-bg">
                  <div class="p-t-20 d-flex justify-content-between">
                    <div class="col">
                      <h6 class="mb-0">Qualified Auditionees</h6>
                      <span class="font-weight-bold mb-0 font-20"><?php echo cf::countrow('*','auditions','status',1); ?></span>
                      <br>
                      <!-- <a href="subscribers"><span class="">View All</span></a> -->
                    </div>
                    <i class="fas fa-user card-icon col-green font-30 p-r-30"></i>
                  </div>
                  <br>
                  <!-- <canvas id="cardChart1" height="80"></canvas> -->
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
<?php require 'inc/footer.php'; ?>