<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_KRISHIBHAVAN_ID'];
	$result = $db->prepare("select * from  user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$oname=$row["oname"];
		
		$cntno=$row["cntno"];
		$location=$row["location"];
		$email=$row["email"];
		$password=$row["password"];
		
		$addr=$row["addr"];
		$panchayath=$row["panchayath"];
		$descp=$row["descp"];
		$photo=$row["photo"];
		$cntno1=$row["cntno1"];
		$wurl=$row["wurl"];
	}
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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete Your profile</p>
                </div>
                <div class="card-body">
                  <form method="post" action="action/profile_update.php" autocomplete="off">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Krishibhavan Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                          <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Officer Name</label>
                          <input type="text" class="form-control" name="oname" value="<?php echo $oname;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="addr" value="<?php echo $addr;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact No</label>
                          <input type="text" class="form-control" name="cntno" value="<?php echo $cntno;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact No</label>
                          <input type="text" class="form-control" name="cntno1" value="<?php echo $cntno1;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Web Address</label>
                          <input type="url" class="form-control" name="wurl" value="<?php echo $wurl;?>">
                        </div>
                      </div>  
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Location</label>
                          <input type="text" class="form-control" name="location" value="<?php echo $location;?>">
                        </div>
                      </div>                   
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="5" name="descp" ><?php echo $descp;?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                  	<?php 
						if($photo=="")
						{
					?>
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                    <?php
						}
						else
						{
					?><img class="img" src="../photo/<?php echo $photo?>" />
                    
                    <?php
						}
					?>
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"><?php echo $name;?></h6>
                  <h4 class="card-title"><?php echo $oname;?></h4>
                  <p class="card-description">
                   <?php echo $descp;?>
                  </p>
                  <form method="post" action="action/photo_update.php" autocomplete="off" enctype="multipart/form-data"> 
                  	<input type="file" name="photo" class="btn btn-primary btn-round" required>
                     <input type="submit" value="Update" class="btn btn-danger btn-round">
                  </form>
                 
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