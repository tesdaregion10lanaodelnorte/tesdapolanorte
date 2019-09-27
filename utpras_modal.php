<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->

 <!-- The Modal -->
 <div class="modal fade" id="utprasModal<?php echo $_SESSION['comp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="utprasModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">More Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container-fluid">
          <div class="row">
                <div class="col">
                    <h4> CONGRESSIONAL DISTRICT:</h4>
                    <h4> TYPE OF INSTITUTION:</h4>
                    <h4> ADDRESS:</h4>
                    <h4> TELEPHONE:</h4>
                    <h4> SECTOR:</h4>
                    <h4> DURATION:</h4>
                </div>
                <div class="col">
                <div class="modal_utpras"> 
                <?php while ($row_modal = mysqli_fetch_assoc($fetchmodalq)){ ?>
                  <h6> <?php echo $row_modal['cong_district']; ?> </h6>
                  <h6> <?php echo $row_modal['type_insti'];?> </h6>
                  <h6> <?php echo $row_modal['address_insti']; ?> </h6>
                  <h6><?php echo $row_modal['tele_insti']; ?> </h6>
                  <h6><?php echo $row_modal['sector']; ?> </h6>
                  <h6><?php echo $row_modal['duration']; ?> </h6>

                <?php } ?>
                </div>
                
                </div>


          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <div class="row">
                  <div class="col">
                  <form method="post"> 
                  <input type="type" name="compid" id="compid" value="" disabled>
                  </form>
                  
                  </div>
                  <div class="col">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                  </div>

                  <?php include('utpras_query.php');?>
                 
        
        </div>

       
          
        </div>
        
      </div>
    </div>
  </div>
  
</div>