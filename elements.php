<?php
session_start();
?>

<!doctype html>
<html lang="zxx">

<head>
<?php 

include('header.php');
include('utpras_query.php');


?>
<script>     
//  modal_utpras ->fetch data
 $(document).ready( function () {
    $('#utpras').DataTable();
	// $("#utprasModal").modal();
// 	$('#utprasModal').on('show.bs.modal', function(e) {
//     var comp_id = $(e.relatedTarget).data('id');
//     // alert(comp_id);

// 	//$('input:hidden').val(comp_id);

   
//   });
} );

</script> 

</head>

<body>
	<!--::header part start::-->
	<?php include('navbar.php');?>
	<!--::Header part end::-->

	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
							<h2>Unified TVET (Technical and Vocational Education and Training) 
								Program Registration and Accreditation System</h2>
							<h5>home <span></span>COMPENDIUM</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb start-->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
		<div class="card-body">
            <div class="table-overflow col-md-12">
                <table id="utpras" class="table table-hover table-xl  ">
                    <thead>
                        <tr>
                            
                            
                            <th>Name of Institution</th>
                            <th>Class of Institution</th>
                            <th>Course</th>
                            <th>Program Registration No.</th>
                            <th>Date Issued</th>
                            <th>Status</th>
                            <th class="text-center" scope="col">View Details</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php while ($row = mysqli_fetch_assoc($fetchdisplayquery)){ ?>
					    <?php $_SESSION['comp_id'] =$row['comp_id']; ?>
                        <tr>
                           
                           <td><?php echo $row['name_insti'] ?> </td>
                           <td><?php echo $row['class_insti'] ?></td>
                                        
                           <td><?php echo $row['course'] ?></td>
                           
                           <td><?php echo $row['prog_reg_no'] ?></td>
                           <td><?php echo $row['date_issued'] ?></td>
                           
                           <td><span class="badge badge-pill badge-info"><?php echo $row['status'] ?></span></td>
                           <td><a  href="#utprasModal<?php echo $_SESSION['comp_id']; ?>" data-toggle="modal" data-id="<?php echo $row['comp_id'] ?>" type= "button" class="btn btn-info btn-rounded btn-outline">
							   <i class="fa fa-info" aria-hidden="true"></i>
							</a>
							
						</td>
                           <!-- <td ng-click="makeEditable($index)" ng-include="{{row.isEditable ? 'editableInput.html' : 'readonly.html'}}"> </td> -->
                        </tr>
					<?php } ?>
					
					</tbody>
                </table>
                <?php include('utpras_modal.php'); ?>
            </div> 
        </div>
		</div>
	</section>
	<!-- End Sample Area -->
	<!-- modal area -->
	
	

	<!-- Start Align Area -->
	<div class="whole-wrap">
		
	</div>
	<!-- End Align Area -->

	<!--::footer_part start::-->
	<?php include('footer.php');?>
	<!--::footer_part end::-->

	<!-- scripts datatable -->
	
</body>

</html>