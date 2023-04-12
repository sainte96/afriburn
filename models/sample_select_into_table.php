<?php 
// INCLUDE AUTH WHICH AUTHENTICATES AND SETS SOME USER DEFINED VARIABLES
	include('./inc/auth.php'); 
// PROCESS FORMS

// INCLUDE TOP HTML
	$pageTitle='My Investments';
	include('./inc/header.php'); 
?>

<?php
	// FECTH USER PROFILE INFO AND HOLD IN VARIABLE
    $stmt = $db->query('SELECT * FROM users WHERE member_id = "'.$member_id.'" LIMIT 0,1');
    $profile = $stmt->fetch(PDO::FETCH_ASSOC);
?>


 <!-- BEGIN PAGE SPECIFIC HTML -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My investments
        <small><?php if (cf::empty_value_exists($profile)) {echo '<span class="text-warning"><i class="ti-user"></i> Your profile is incomplete! <a href="./profile" style="text-decoration: underline;">Complete your profile now</a></span>';} else {echo '';} ?> </small>
      </h1>
      <ol class="breadcrumb">						
        <li class="breadcrumb-item"><a href="./dashboard"><i class="fa fa-th"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">All Investments</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		  
		  <div class="row">
			  
			<div class="col-lg-12 col-12">
			  

          <div class="box">
            <div class="box-header with-border bg-dark">
              <h3 class="box-title">Your investments with Darolls Nig. Ltd.</h3>
              <h6 class="box-subtitle">Click on the reference number to see more details</h6>
          	</div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					<thead>
						<tr>
						  <th>Ref #</th>
						  <th>Status</th>
						  <th>Investment Amount(₦)</th>
						  <th>ROI(every 30 days)</th>
						  <th>Duration</th>
						  <th>Start date</th>
						  <th>End Date</th>
						</tr>
					</thead>
					<tbody>	<?php
							// FECTH USER INVESTMENTS
						    $stmt = $db->query('SELECT * FROM investments WHERE investor_id = "'.$member_id.'" ORDER BY id DESC');
						    while ($investments = $stmt->fetch(PDO::FETCH_ASSOC)){
							?>
							<tr>
							  <td><a href="./investment?ref=<?php echo $investments['investment_ref']; ?>" ><?php echo $investments['investment_ref']; ?></a></td>
							  <td>
								<span class="badge bg-<?php echo cf::process_investment_status($investments['status'],'color'); ?>"><?php echo cf::process_investment_status($investments['status']); ?></span>
							  </td>
							  <td><?php echo number_format($investments['amount']); ?></td>
							  <td><?php echo $investments['roi']; ?>% (₦<?php echo number_format(cf::calc_roi($investments['amount'],$investments['roi'])); ?>)</td>
							  <td><?php echo $investments['life_span']; ?> Months</td>
							  <td><?php if (empty($investments['start_date'])) echo 'N/A'; else echo cf::timestamp_to_date($investments['start_date']); ?></td>
							  <td><?php if (empty($investments['end_date'])) echo 'N/A'; else echo cf::timestamp_to_date($investments['end_date']); ?></td>
						</tr>
					<?php } ?>
					</tbody>				  
					<tfoot>
					</tfoot>
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  


			</div>
			  
		  </div>
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php 
// END PAGE SPECIFIC HTML

// INCLUDE BOTTOM HTML
	include('./inc/footer.php'); 
?>
	
		<!-- This is data table -->
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- SoftMaterial admin for Data Table -->
	<script src="js/pages/data-table.js"></script>

</body>

</html>