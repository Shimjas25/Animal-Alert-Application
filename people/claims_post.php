<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	$result = $db->prepare("select * from  user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$sex=$row["sex"];
		$age=$row["age"];
		
		$dob=$row["dob"];
		
		$aadharno=$row["aadharno"];
		
		$cntno=$row["cntno"];
		$email=$row["email"];
		$password=$row["password"];
		
		$addr=$row["addr"];
		$panchayath=$row["panchayath"];
		$descp=$row["descp"];
		$photo=$row["photo"];
		
		$frstry=$row["frstry"];
		$hospt=$row["hospt"];
		
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
                  <h4 class="card-title">Claims Post</h4>
                  <p class="card-category">Complete Your Complaints</p>
                </div>
                <div class="card-body">
                  <form method="post" action="action/complaint_post.php" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name"  value="<?php echo $name;?>">
                          <input type="hidden" name="photo"  value="<?php echo $photo;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" class="form-control" name="sex"  value="<?php echo $sex;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="text" class="form-control" name="age"  value="<?php echo $age;?>">
                        </div>
                      </div>                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Aadharno</label>
                          <input type="text" class="form-control" name="aadharno"  value="<?php echo $aadharno;?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="addr"  value="<?php echo $addr;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hospital</label>
                          <input list="hospt" required class="form-control form-control-primary" name="hospt" value="<?php echo $hospt;?>">
                            <datalist id="hospt">
								 <?php
                                    $result = $db->prepare("select * from user where utype='Hospital'");
                                    $result->execute();
                                    $row_count =  $result->rowcount();
                                    for($i=0; $rows = $result->fetch(); $i++)
                                    {
                                    echo '<option>'.$rows['name'].'</option>';
                                    }
                                ?>	                                         					
                           </datalist>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact No</label>
                          <input type="text" class="form-control" name="cntno"  value="<?php echo $cntno;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Claims Date</label>
                          <input type="date" class="form-control" name="cdate" required>
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Post Date</label>
                         	<input type="text" class="form-control" name="pdate" value="<?php echo date("Y-m-d");?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Forestry</label>
                          <input list="frstry" required class="form-control form-control-primary" name="frstry"  value="<?php echo $frstry;?>">
                            <datalist id="frstry">
                                    <option value="">Select</option> 
                                     <?php
                                        $result = $db->prepare("select * from user where utype='Forestry'");
                                        $result->execute();
                                        $row_count =  $result->rowcount();
                                        for($i=0; $rows = $result->fetch(); $i++)
                                        {
                                        echo '<option>'.$rows['name'].'</option>';
                                        }
                                    ?>	                                         					
                                </datalist>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Panchayath</label>
                          <input type="text" class="form-control" name="panchayath"  value="<?php echo $panchayath;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Claims</label>
                          <input type="text" class="form-control" name="cname" required>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Complaint</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Description.</label>
                            <textarea class="form-control" rows="5" name="descp" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">               
                <div class="card-body">
                  	 <input type="file" name="photo1" class="btn btn-primary btn-round">
                     <hr>
                     <input type="file" name="photo2" class="btn btn-primary btn-round">
                     <hr>
                     <input type="submit" value="Submit" class="btn btn-danger btn-round">
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