<!DOCTYPE html>
<html lang="en">

<head>
  	<?php include("include/header.php");?>
    <meta http-equiv="refresh" content="3">
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
          <div class="card">
            <div class="card-header card-header-danger">
              <h3 class="card-title">All</h3>
              <p class="card-category">Notifications
              </p>
            </div>
            <div class="card-body">
              <div class="row">
                
                <div class="col-md-6">
                  <h4 class="card-title">Name Abc Contact 98994646467</h4>  
                  <div class="alert alert-primary">
                    <span>This is a plain notification</span>
                  </div>                                                     
                </div>
                
              </div>
            </div>
           
          </div>
        </div>
      </div>
       <?php include("include/footer.php");?> 
    </div>
  </div>
 	
   <?php include("include/js.php");?>
</body>

</html>