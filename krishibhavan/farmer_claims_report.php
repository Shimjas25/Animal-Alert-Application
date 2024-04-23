<?php
 	 require("auth.php");
  	include('../connect/db.php');	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  	<?php include("include/header.php");?>
</head>

<body class="">
  <div class="wrapper ">
    <?php include("include/leftmenu.php");?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("include/navbar.php");?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-7">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Report</h4>
                  <p class="card-category">Complaint</p>
                </div>
                <div class="card-body">
                  <form method="post" action="farmer_claims_report_view.php">
                    <div class="row">                    
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><b>From</b></label>
                          <input type="date" class="form-control" name="fdate" required>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><b>To</b></label>
                          <input type="date" class="form-control" name="tdate" required>
                        </div>
                      </div>                     
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      	<br><br><br><br><br><br><br><br><br><br><br><br>
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>